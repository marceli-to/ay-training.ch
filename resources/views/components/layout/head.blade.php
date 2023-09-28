<!doctype html>
<html lang="de" class="h-full">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{config('seo.title')}}</title>
<meta name="description" content="{{config('seo.description')}}">
<meta property="og:title" content="{{config('seo.title')}}">
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:site_name" content="{{config('seo.title')}}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
@vite('resources/css/app.css')
</head>
<body class="p-20 sm:p-24 lg:p-36 xl:p-48 font-sans font-light text-base lg:text-md xl:text-lg xl:leading-7">