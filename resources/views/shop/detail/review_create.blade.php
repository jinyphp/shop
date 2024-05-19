<div class="flex space-x-4">
    {{--
    <img src="https://source.unsplash.com/iFgRcqHznqg/128x128" alt="User Avatar" class="flex-none inline-block w-10 h-10 sm:w-16 sm:h-16 rounded-full">
    --}}
    <div class="grow">
        <form onsubmit="return false;" class="space-y-6">
            <textarea class="block border border-gray-200 rounded placeholder-gray-400 px-3 py-2 w-full focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
            id="comment" name="comment" rows="4"
            wire:model.defer="forms.review"
            placeholder="리뷰를 간단하게 작성해 주세요.."></textarea>

            <div class="flex justify-end items-center space-x-4">
                <div><label for="">평점</label></div>
                <div class="comment-form-rating">
                    <p class="stars">
                        <label for="rated-1"></label>
                        <input type="radio" id="rated-1" name="rating" value="1" wire:model.defer="forms.rank">
                        <label for="rated-2"></label>
                        <input type="radio" id="rated-2" name="rating" value="2" wire:model.defer="forms.rank">
                        <label for="rated-3"></label>
                        <input type="radio" id="rated-3" name="rating" value="3" wire:model.defer="forms.rank">
                        <label for="rated-4"></label>
                        <input type="radio" id="rated-4" name="rating" value="4" wire:model.defer="forms.rank">
                        <label for="rated-5"></label>
                        <input type="radio" id="rated-5" name="rating" value="5" wire:model.defer="forms.rank" checked="checked">
                    </p>
                </div>

                @auth
                <a href="javascript:void(0)" class="font-semibold text-blue-600 hover:text-blue-400">
                    {{Auth::user()->name}}
                </a>
                @endauth

                @guest
                <div class="">
                    <label for="">작성자</label>
                </div>
                <div>
                    <input type="text" name="name"
                    wire:model.defer="forms.username"
                    class="block border border-gray-200 rounded placeholder-gray-400 px-3 py-2 w-full focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"/>
                </div>

                <div class="">
                    <label for="">이메일</label>
                </div>
                <div>
                    <input type="email" name="email"
                    wire:model.defer="forms.email"
                    class="block border border-gray-200 rounded placeholder-gray-400 px-3 py-2 w-full focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"/>
                </div>

                <div class="">
                    <label for="">수정암호</label>
                </div>
                <div>
                    <input type="password" name="password"
                    wire:model.defer="forms.password"
                    class="block border border-gray-200 rounded placeholder-gray-400 px-3 py-2 w-full focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"/>
                </div>
                @endguest


                @if(isset($forms['id']))
                <button type="button"
                wire:click="update('{{$forms['id']}}')"
                class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-violet-700 bg-violet-700 text-white hover:text-white hover:bg-violet-800 hover:border-violet-800 focus:ring focus:ring-violet-500 focus:ring-opacity-50 active:bg-violet-700 active:border-violet-700">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-pencil inline-block w-5 h-5">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                    </svg>
                    <span>리뷰수정</span>
                </button>

                <button type="button"
                wire:click="delete('{{$forms['id']}}')"
                class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-red-700 bg-red-700 text-white hover:text-white hover:bg-red-800 hover:border-red-800 focus:ring focus:ring-red-500 focus:ring-opacity-50 active:bg-red-700 active:border-red-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span>삭제</span>
                </button>

                @else

                    @if($reply_id)
                        <button type="button"
                        wire:click="reply_update"
                        class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-green-700 bg-green-700 text-white hover:text-white hover:bg-green-800 hover:border-green-800 focus:ring focus:ring-green-500 focus:ring-opacity-50 active:bg-green-700 active:border-green-700">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-pencil inline-block w-5 h-5"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                            <span>Reply</span>
                        </button>
                    @else
                        <button type="button"
                        wire:click="save"
                        class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-blue-700 bg-blue-700 text-white hover:text-white hover:bg-blue-800 hover:border-blue-800 focus:ring focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-700 active:border-blue-700">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-pencil inline-block w-5 h-5"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                            <span>리뷰작성</span>
                        </button>
                    @endif

                @endif

            </div>
        </form>
    </div>
</div>

