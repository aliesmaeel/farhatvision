<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $businessCard->name }} - Business Card</title>
    <link rel="stylesheet" href="/css/style.css?v={{ time() }}">
    <link rel="stylesheet" href="/css/respo.css?v={{ time() }}">

</head>
<body>
    <div class="container business_card_page">
        <div class="content">
            <div class="grid_container">
                <div class="col img_container">
                    <img src="{{ asset('/storage/'.$businessCard->logo) }}">
                </div>
                <div class="col details_card_business">
                    <div class="flex_col">
                        <div class="title">{{ $businessCard->name }}</div>
                        <div class="job_title">{{ $businessCard->job_title }}</div>
                        <div class="company_name">{{ $businessCard->company_name }}</div>
                        <div class="flex">
                            <img src="/images/mail.svg">
                            <a href="mailto:{{ $businessCard->email }}" class="text-blue-500 hover:underline">{{ $businessCard->email }}</a>
                        </div>
                        <div class="flex">
                            <img src="/images/tel.svg">
                            <a href="tel:{{ $businessCard->phone }}" class="text-blue-500 hover:underline">{{ $businessCard->phone }}</a>
                        </div>
                        <div class="text">
                            <span>Website:</span> <a href="//{{ $businessCard->url }}" class="text-blue-500 hover:underline" target="_blank">{{ $businessCard->url }}</a>
                        </div>
                        <div class="btn_contact">
                            <a href="{{ route('business-card.vcard', $businessCard->id) }}">
                                Add to Contacts
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- logo -->
    {{-- <div class="flex items-center justify-center h-40 sm:h-48 bg-cover bg-center"
         style="background-image: url({{ asset('logo.jpg') }});">
    </div> --}}

    <!-- name, title, company -->
    {{-- <div class="text-center p-4 border-b">
        <h1 class="text-xl sm:text-2xl font-bold">{{ $businessCard->name }}</h1>
        <p class="text-gray-600">{{ $businessCard->job_title }}</p>
        <p class="text-gray-500">{{ $businessCard->company_name }}</p>
    </div> --}}

    <!-- email & phone -->
    {{-- <div class="text-center p-4 border-b space-y-2">
        <p>
            📧 <a href="mailto:{{ $businessCard->email }}" class="text-blue-500 hover:underline">{{ $businessCard->email }}</a>
        </p>
        <p>
            📞 <a href="tel:{{ $businessCard->phone }}" class="text-blue-500 hover:underline">{{ $businessCard->phone }}</a>
        </p>
    </div> --}}

    <!-- contact & vcard -->
    {{-- <div class="text-center p-4 space-y-2">
        <p>Email: {{ $businessCard->email }}</p>
        <p>Phone: {{ $businessCard->phone }}</p>
        <p>Website: <a href="//{{ $businessCard->url }}" class="text-blue-500 hover:underline" target="_blank">{{ $businessCard->url }}</a></p>
        <a href="{{ route('business-card.vcard', $businessCard->id) }}"
           class="mt-2 bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 inline-block">
            Add to Contacts
        </a>
    </div> --}}


</body>
</html>
