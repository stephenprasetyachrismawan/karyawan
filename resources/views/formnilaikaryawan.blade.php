<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Penilaian Karyawan') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg grid place-content-center ">
                <div class="m-7 card card-compact w-96 bg-base-50 shadow-xl">

                    <div class="card-body">
                        <h2 class="card-title">Penilaian Karyawan</h2>
                        <form action={{ route('updatenilai') }} method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $ky->id }}">
                            <input type="text" placeholder="Nama"
                                class="input input-bordered input-secondary w-full max-w-xs" name="nama" disabled
                                value="{{ $ky->nama }}" />
                            <br><br>
                            <h2 class="text-xl" for="kehadiran">Rating Kehadiran</h2>

                            <div class="rating rating-lg" id="kehadiran">
                                <input type="radio" name="rathadir" class="mask mask-star-2 bg-orange-400"
                                    value="1" />
                                <input type="radio" name="rathadir" class="mask mask-star-2 bg-orange-400"
                                    value="2" checked />
                                <input type="radio" name="rathadir" class="mask mask-star-2 bg-orange-400"
                                    value="3" />
                                <input type="radio" name="rathadir" class="mask mask-star-2 bg-orange-400"
                                    value="4" />
                                <input type="radio" name="rathadir" class="mask mask-star-2 bg-orange-400"
                                    value="5" />
                            </div>
                            <br><br>
                            <h2 class="text-xl" for="kehadiran">Rating Tugas Selesai</h2>

                            <div class="rating rating-lg" id="tugas">
                                <input type="radio" name="rattug" class="mask mask-star-2 bg-green-400"
                                    value="1" />
                                <input type="radio" name="rattug" class="mask mask-star-2 bg-green-400"
                                    value="2" checked />
                                <input type="radio" name="rattug" class="mask mask-star-2 bg-green-400"
                                    value="3" />
                                <input type="radio" name="rattug" class="mask mask-star-2 bg-green-400"
                                    value="4" />
                                <input type="radio" name="rattug" class="mask mask-star-2 bg-green-400"
                                    value="5" />
                            </div>
                            <br><br>
                            <h2 class="text-xl" for="kehadiran">Rating Kejujuran</h2>

                            <div class="rating rating-lg" id="tugas">
                                <input type="radio" name="ratkej" class="mask mask-star-2 bg-blue-400"
                                    value="1" />
                                <input type="radio" name="ratkej" class="mask mask-star-2 bg-blue-400" value="2"
                                    checked />
                                <input type="radio" name="ratkej" class="mask mask-star-2 bg-blue-400"
                                    value="3" />
                                <input type="radio" name="ratkej" class="mask mask-star-2 bg-blue-400"
                                    value="4" />
                                <input type="radio" name="ratkej" class="mask mask-star-2 bg-blue-400"
                                    value="5" />
                            </div>
                            <div class="card-actions justify-end">
                                <input type="submit" class="btn btn-primary" value="Simpan">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
