@extends('layouts.app')



@section('content')
    <x-navbar></x-navbar>
    <div class="min-h-screen bg-white pt-48">
        <div class="grid grid-cols-2 gap-0 container mx-auto">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-5xl text-left">präsentiere dein event, <span class="text-primary-logo">kostenlos!</span></h1>
                <p>
                    <span class="text-primary-logo">branchenkalender</span> bündelt branchenevents, networkingtermine, schulungen und onlineevents aller branchen auf einer plattform,
                    dadruch erreichen wir ein größeres publikum und du kannst dein event einer größeren zielgruppe präsentieren und so teilnehmer und kontakte finden an die du vielleicht noch gar nciht dedacht hast.
                </p>
                <div class="grid grid-cols-2 gap-10 w-full mt-12">
                    <div>
                        <a href="{{route('register')}}" class="block bg-primary-logo text-white text-center font-semibold p-3 rounded-xl shadow-lg hover:text-white hover:shadow-none transition duration-150 ease-in-out no-underline">kostenlos registrieren</a>
                    </div>
                </div>
            </div>
            <div class="w-full h-full" style="background: url({{ asset('conference-meeting.jpg') }})">
                <svg  class="text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1024 768">
                    <g>
                        <path d="M-116.25-154.13V954h1477.5V-154.13H-116.25z M899.05,537.45c0.31,4.62,0.48,9.28,0.48,13.99
		c0,115.55-93.67,209.22-209.22,209.22c-115.32,0-208.84-93.31-209.21-208.54c-35.45,27.6-80.01,44.05-128.42,44.05
		c-115.55,0-209.22-93.67-209.22-209.22s93.67-209.22,209.22-209.22c12.54,0,24.82,1.11,36.76,3.22
		C407.56,83.86,492.73,10.36,595.09,10.36c88.21,0,163.66,54.59,194.43,131.83c4.89-0.34,9.81-0.53,14.79-0.53
		c115.55,0,209.22,93.67,209.22,209.22C1013.52,432.32,966.98,502.89,899.05,537.45z"/>
                    </g>
</svg>
            </div>
        </div>
    </div>
@endsection
