<?php

use App\Models\BusinessCard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/calculate-your-investment',function () {
    return response()->file(public_path('discover_investments.html'));
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/business-card/{businessCard}', function (BusinessCard $businessCard) {
    return view('business-card-public', compact('businessCard'));
})->name('business-card.show');


Route::get('/business-card/{businessCard}/qr', function (BusinessCard $businessCard) {
    $qr = QrCode::size(300)
        ->generate(route('business-card.show', $businessCard->id));

    return response($qr)
        ->header('Content-Type', 'image/svg+xml')
        ->header('Content-Disposition', 'attachment; filename="business-card-qr.svg"');
})->name('business-card.qr.download');

Route::get('/business-card/{businessCard}/vcard', function (BusinessCard $businessCard) {
    // Split name into first & last for iOS compatibility
    $nameParts = explode(' ', $businessCard->name, 2);
    $firstName = $nameParts[0] ?? '';
    $lastName  = $nameParts[1] ?? '';

    // Build vCard with proper CRLF line endings
    $vcard  = "BEGIN:VCARD\r\n";
    $vcard .= "VERSION:3.0\r\n";
    $vcard .= "N:{$lastName};{$firstName};;;\r\n";     // Structured name (required by iOS)
    $vcard .= "FN:{$businessCard->name}\r\n";          // Formatted full name
    $vcard .= "ORG:{$businessCard->company_name}\r\n";
    $vcard .= "TITLE:{$businessCard->job_title}\r\n";
    $vcard .= "TEL;TYPE=CELL:{$businessCard->phone}\r\n"; // CELL works best for iOS/Android
    $vcard .= "EMAIL:{$businessCard->email}\r\n";
    $vcard .= "ADR;TYPE=WORK:;;{$businessCard->address};;;;\r\n";
    $vcard .= "URL:{$businessCard->url}\r\n";
    $vcard .= "END:VCARD\r\n";

    $fileName = Str::slug($businessCard->name) . ".vcf";

    return response($vcard)
        ->header('Content-Type', 'text/vcard; charset=utf-8')
        ->header('Content-Disposition', "inline; filename=\"{$fileName}\"");
})->name('business-card.vcard');
