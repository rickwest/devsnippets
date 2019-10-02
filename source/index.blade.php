@extends('_layouts.master')

@section('body')
    <section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
        <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
            <div class="mt-8">
                <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

                <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

                <p class="text-lg">Having to Google the same thing over and over? <br> Sick of searching Stack Overflow for that obscure answer you found the other week? <br class="hidden sm:block">There's probably a snippet for that (and if there isn't, there should be)!</p>

                <div class="flex my-10">
                    <a href="/snippets/welcome" title="{{ $page->siteName }} getting started" class="bg-blue hover:bg-blue-dark font-normal text-white hover:text-white rounded mr-4 py-2 px-6">To the snippets 👉</a>
                </div>
            </div>

            <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
        </div>

        <hr class="block my-8 border lg:hidden">

        <div class="md:flex -mx-2 -mx-4">

            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

                <h3 class="text-2xl text-blue-darkest mb-0">What Are Snippets?</h3>

                <p>Snippets are those useful bits of code that you only need every so often. A reference for your future self (and others), saving you that infuriating search for that answer that you didn't know you would need again!</p>
            </div>

            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

                <h3 class="text-2xl text-blue-darkest mb-0">Copy/Paste Driven Development</h3>

                <p>You're only human, you can't remember everything and now you don't need to! Copy/Paste programming has never felt so good.</p>
            </div>

            <div class="mx-3 px-2 md:w-1/3">
                <img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

                <h3 class="text-2xl text-blue-darkest mb-0">Contribute</h3>

                <p>Got a helpful snippet that you want to share? Looking for that first Open Source Contribution (perfect for <a href="https://hacktoberfest.digitalocean.com">Hacktoberfest</a>)? Open an issue or create a pull request on <a href="https://github.com/rickwest/devsnippets">Github</a>.</p>
            </div>
        </div>
    </section>
@endsection
