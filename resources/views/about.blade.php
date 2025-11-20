@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto bg-white shadow p-8 rounded-lg">

    <h1 class="text-4xl font-bold mb-4 text-gray-900">About Us</h1>

    <p class="text-gray-700 leading-relaxed text-lg mb-6">
        Welcome to <strong>MyCMS</strong>! We are dedicated to providing useful,
        engaging, and high-quality content to our audience. Our mission is to
        empower individuals by sharing knowledge, insights, and resources across
        various topics.
    </p>

    <h2 class="text-2xl font-semibold mt-8 mb-2">Our Mission</h2>
    <p class="text-gray-700 leading-relaxed mb-6">
        Our mission is to build a simple, fast, and scalable content management
        platform that allows users to create, publish, and manage content
        efficiently.
    </p>

    <h2 class="text-2xl font-semibold mt-8 mb-2">Who We Are</h2>
    <p class="text-gray-700 leading-relaxed mb-6">
        We are a team of passionate developers focused on building modern web
        applications using Laravel, React, and TailwindCSS. Our commitment is to
        simplicity, performance, and great user experience.
    </p>

    <h2 class="text-2xl font-semibold mt-8 mb-2">What We Offer</h2>
    <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>Modern & responsive design</li>
        <li>Powerful CMS features</li>
        <li>SEO-friendly pages</li>
        <li>Dynamic blog system</li>
        <li>Secure authentication & admin panel</li>
    </ul>

</div>

@endsection
