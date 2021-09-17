<div class="p-5 space-y-4 text-gray-500 bg-white border-l-4 border-blue-300 shadow">
    <div class="grid grid-cols-8">

        {{-- Avatar --}}
        <div class="col-span-1">
            <x-user.avatar :user="$reply->author()" />
        </div>

        <div class="col-span-6 space-y-4">
            <p>
                {!! $reply->body() !!}
            </p>

            <div class="flex justify-between">
                {{-- Likes --}}
                <div class="flex space-x-5 text-gray-500">
                    <a href="" class="flex items-center space-x-2">
                        <x-heroicon-o-heart class="w-5 h-5 text-red-300" />
                        <span class="text-xs font-bold">30</span>
                    </a>
                </div>

                {{-- Date Posted --}}
                <div class="flex items-center text-xs text-gray-500">
                    <x-heroicon-o-clock class="w-4 h-4 mr-1" />
                    Replied: {{ $reply->created_at->diffForHumans() }}
                </div>
            </div>
        </div>
    </div>
</div>
