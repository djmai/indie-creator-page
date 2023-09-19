@extends('layouts.public')

@section('title')
    @parent
    {{ $user->username ?? $user->name }}
@endsection

@section('description')
    @parent
    {{ $user->description }}
@endsection

@section('tags')
    @parent
    {{ $user->tags }}
@endsection

@section('author')
    @parent
    {{ $user->name }}
@endsection

@section('url')
    @parent
    @asset($user->username)
@endsection

@section('image')
    @parent
    {{ $user->avatar }}
@endsection

@section('content')
    @parent
    <div class="flex flex-col lg:flex-row mt-5 md:mt-12">
        <nav class="w-full md:max-w-sm mb-5 px-5">
            <div>
                <div>
                    <h3 class="font-semibold text-2xl" itemprop="name">{{ $user->name }}</h3>
                    <div class="text-md text-zinc-500" itemprop="job title">{{ $user->label }}</div>
                </div>
                <div class="mt-3">
                    <span class="text-md">
                        {{ $translation->description }}
                    </span>
                </div>
                <div class="mt-3">
                    <a href="mailto:{{ $user->email }}" class="font-normal border-b border-dashed border-zinc-400"
                        itemprop="email" target="_blank" title="{{ $user->email }}">
                        {{ $user->email }}
                    </a>
                </div>
                <div class="mt-3">
                    <a href="tel://{{ $user->phone }}" class="font-normal border-b border-dashed border-zinc-400"
                        itemprop="telephone" target="_blank" title="{{ $user->phone }}">
                        {{ $user->phone }}
                    </a>
                </div>
                <div class="mt-3">
                    <span class="text-md">
                        {{ $user->language }}
                    </span>
                </div>
                <div class="mt-3">
                    <span class="text-md">
                        {{ $user->timezone }}
                    </span>
                </div>
                <div class="mt-3">
                    <span class="text-md">
                        {{ $user->location }}
                    </span>
                </div>
            </div>
            <div class="flex mt-4 space-x-6">
                @set($tags = explode(',', $translation->tags))
                @foreach ($tags as $tag)
                    <span class="text-gray-500">
                        #{{ $tag }}
                    </span>
                @endforeach
            </div>
        </nav>
        <main class="w-full px-5">
            <section>
                <div class="relative">
                    <a href="#side-projects" class="section-headline" title="Side Projects">
                        <h4 id="side-projects">Side Projects</h4>
                    </a>
                </div>
                <ul class="grid md:grid-cols-2 py-5">
                    <li class="pl-5 py-5">
                        @foreach ($sideProjects as $project)
                            <div>
                                <div class="flex space-x-2" itemprop="award">
                                    <strong>{{ $project->name }}</strong>
                                    <a href="{{ $project->repository }}"
                                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white" target="_blank"
                                        title="GitHub">
                                        {{ $project->repository }}
                                    </a>
                                    <a href="{{ $project->website }}"
                                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white" target="_blank"
                                        title="{{ $project->website }}">
                                        {{ $project->website }}
                                    </a>
                                </div>
                                <p>
                                    <small>{{ $project->description }}</small>
                                </p>
                            </div>
                        @endforeach
                    </li>
                </ul>
            </section>
            <section id="work-projects-group">
                <div class="relative">
                    <a href="#projects" class="section-headline" title="Projects">
                        <h4 id="projects">Projects</h4>
                    </a>
                </div>
                <ul class="grid md:grid-cols-2 py-5">
                    <li class="pl-5 py-5">
                        <div>
                            <div class="flex space-x-2" itemprop="award">
                                <strong>{{ $project->displayName }}</strong>
                                <a href="{{ $project->repository }}"
                                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white" target="_blank"
                                    title="GitHub">
                                    {{ $project->repository }}
                                </a>
                                <a href="{{ $project->website }}"
                                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white" target="_blank"
                                    title="{{ $project->website }}">
                                    {{ $project->website }}
                                </a>
                            </div>
                            <p>
                                <small>{{ $project->summary }}</small>
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="relative">
                    <a href="#work-experience" class="section-headline" title="Work Experience">
                        <h4 id="work-experience">Work Experience</h4>
                    </a>
                </div>
                <ul class="list-none">
                    <li class="pl-5 py-5">
                        <p>
                            <strong>{{ $job->name }}</strong>
                            <span class="text-md text-zinc-500" style="margin-left: 0.3em">{{ $job->position }}</span>
                        </p>
                        <p class="mb-2 text-md text-zinc-500">
                            <small>{{ $job->startAt }} </small>
                        </p>
                        <p>{{ $job->summary }}</p>
                        <ul class="list-disc ml-10 mt-2">
                            <li>{{ $job->task }}</li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section>
                <div class="relative">
                    <a href="#skills" class="section-headline" title="Skills">
                        <h4 id="skills">Skills</h4>
                    </a>
                </div>
                <div class="pl-5 py-5" itemprop="description">
                    @foreach ($skills as $skill)
                        <div class="grid gap-1.5" style="grid-template-columns: max-content auto">
                            <div class="font-bold text-right">{{ $skill->name }}</div>
                            <div class="text-zinc-500">{{ $skill->level }}</div>
                        </div>
                    @endforeach
                </div>
            </section>
            <section>
                <div class="relative">
                    <a href="#education" class="section-headline" title="Education">
                        <h4 id="education">Education</h4>
                    </a>
                </div>
                <ul class="list-none pl-5">
                    <li class="my-5">
                        <p>
                            <span class="text-md text-zinc-500">{{ $study->institution }}</span>
                        </p>
                        <p class="mb-2 text-md text-zinc-500">
                            <small>{{ $study->startAt }}</small>
                        </p>
                        <div>{{ $study->description }}</div>
                    </li>
                </ul>
            </section>
            <section>
                <div class="relative">
                    <a href="#publications" class="section-headline" title="Talks">
                        <h4 id="publications">Talks</h4>
                    </a>
                </div>
                <ul class="list-none pl-5">
                    <li class="my-5">
                        <p>
                            <strong>{{ $publication->name }}</strong>
                            <span class="text-md text-zinc-500">{{ $publication->publisher }}</span>
                        </p>
                        <p class="mb-2 text-md text-zinc-500">
                            <small>{{ $publication->releaseAt }}</small>
                        </p>
                        <p>{{ $publication->summary }}</p>
                    </li>
                </ul>
            </section>
            <section>
                <div class="relative">
                    <a href="#awards" class="section-headline" title="Awards">
                        <h4 id="awards">Awards</h4>
                    </a>
                </div>
                <ul class="list-none pl-5">
                    <li class="my-5">
                        <div>
                            <p itemprop="award"><strong>{{ $award->title }}</strong>
                                <span class="text-md text-zinc-500"> {{ $award->awarder }}</span>
                            </p>
                            <p class="mb-2 text-md text-zinc-500"><small>{{ $award->date }}</small></p>
                            <p>{{ $award->summary }}</p>
                        </div>
                    </li>
                </ul>
            </section>
            <section>
                <div class="relative">
                    <a href="#volunteer-work" class="section-headline" title="Volunteer Work">
                        <h4 id="volunteer-work">Volunteer Work</h4>
                    </a>
                </div>
                <ul class="list-none pl-5">
                    <li class="my-5">
                        <div>
                            <p><strong>{{ $volunteer->position }}</strong>
                                <span class="text-md text-zinc-500">{{ $volunteer->organization }}</span>
                            </p>
                            <p class="mb-2 text-md text-zinc-500">
                                <small>{{ $volunteer->startAt }}</small>
                            </p>
                            <p>{{ $volunteer->summary }}</p>
                            <ul>
                            </ul>
                        </div>
                    </li>
                </ul>
            </section>
            <section>
                <div class="relative">
                    <a href="#languages" class="section-headline" title="Languages">
                        <h4 id="languages">Languages</h4>
                    </a>
                </div>
                <ul class="list-none pl-5 py-5">
                    <li><strong>{{ $language->name }}</strong> {{ $language->fluency }}</li>
                </ul>
            </section>
        </main>
    </div>
@endsection
