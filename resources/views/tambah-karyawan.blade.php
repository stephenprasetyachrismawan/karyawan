<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Tambah Karyawan') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg grid place-content-center ">
                <div class="m-7 card card-compact w-96 bg-base-50 shadow-xl">

                    <div class="card-body">
                        <h2 class="card-title">Tambah Data Karyawan</h2>
                        <form action={{ route('tambahkaryawan') }} method="post">
                            @csrf
                            <input type="text" placeholder="Nama"
                                class="input input-bordered input-secondary w-full max-w-xs" name="nama" />
                            <select class="select select-primary w-full max-w-xs" name="divisi">
                                <option disabled selected>-- Pilih Divisi --</option>
                                <option value="1">HRD</option>
                                <option value="2">IT</option>
                                <option value="3">Pemasaran</option>

                            </select>
                            <div class="card-actions justify-end">
                                <input type="submit" class="btn btn-primary" value="Tambah">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
