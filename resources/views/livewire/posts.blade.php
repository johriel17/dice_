<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-banner />
    <div class="mt-8 text-2xl flex justify-between">

        <div>
            <a href="{{ route('create-post') }}">
                <x-button class="bg-green-400 hover:bg-green-600">
                    Add New Post
                </x-button>
            </a>
        </div>

    </div>

    <div class="mt-6">
        @foreach ($posts as $post)
            <div class="mt-2">
                <div
                    class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $post->content }}</p>
                    <p class="font-thin text-right text-gray-400 dark:text-gray-100">{{ $post->date }}</p>

                    <div class="mt-3 text-right">
                        <x-button wire:navigate href="/view-post/{{ $post->id }}"
                            class="bg-green-400 hover:bg-green-500">
                            View
                        </x-button>

                        <x-button wire:navigate href="/{{ $post->id }}/edit-post"
                            class="bg-yellow-300 hover:bg-yellow-400">
                            Edit
                        </x-button>

                        <x-danger-button wire:click="confirmPostDeletion({{ $post->id }})"
                            wire:loading.attr="disabled">
                            {{ __('Delete') }}
                        </x-danger-button>





                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>

    <x-dialog-modal wire:model.live="confirmingPostDeletion">
        <x-slot name="title">
            {{ __('Delete') }}
            {{ $confirmingPostDeletion }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete this post?') }}
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('confirmingPostDeletion', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ms-3" wire:click="delete({{ $confirmingPostDeletion }})"
                wire:loading.attr="disabled">
                {{ __('Delete Post') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>

    {{-- <x-dialog-modal wire:model.live="confirmingPostAdd">
        <x-slot name="title">
            {{ __('Add Post') }}
        </x-slot>

        <x-slot name="content">

            <div class="col-span-6 sm:col-span-4">
                <x-label for="title" value="{{ __('Title') }}" />
                <x-input id="title" type="text" class="mt-1 block w-full" wire:model="post.title" />
                <x-input-error for="post.title" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-label for="content" value="{{ __('Content') }}" />
                <x-input id="content" type="text" class="mt-1 block w-full" wire:model="post.content" />
                <x-input-error for="post.content" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('confirmingPostAdd', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ms-3" wire:click="savePost()" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal> --}}

</div>
