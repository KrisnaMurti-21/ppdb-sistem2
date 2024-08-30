<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Transfer') }}
        </h2>
    </x-slot>
    <div class="grid grid-cols-12 pt-5 gap-4">
        <div class="col-span-8">

            <div class="w-full bg-white border border-gray-200 rounded-lg shadow py-3 mx-3">
                <div class="flex items-center mx-auto text-center justify-center">
                    <img class="w-96 max-w-lg rounded-lg" src="/storage/images/{{ $datatransfer->bukti_transfer }}"
                        alt="image description">
                </div>
            </div>

        </div>
        <div class="col-span-4">{{-- Profile --}}
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                <div class="flex flex-col items-center pb-10 pt-6">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/img/default-avatar.jpg"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $datauser->name }}</h5>
                    <span class="text-sm text-gray-500 ">Siswa</span>
                    <div class="flex mt-4 md:mt-6">
                        @if ($datatransfer->status == 'pending')
                            <a href="{{ route('approve', $datatransfer->id) }}"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Approve</a>
                            <a href="{{ route('reject', $datatransfer->id) }}"
                                class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Reject</a>
                        @endif
                    </div>
                </div>

            </div>
            {{-- End of Profile --}}
        </div>
    </div>

</x-app-layout>
