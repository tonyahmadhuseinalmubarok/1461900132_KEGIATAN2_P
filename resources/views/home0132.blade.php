<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    1461900132
  </title>
</head>
<body>

  <div class="bg-white rounded-lg shadow-lg py-6">
    <div class="block overflow-x-auto mx-6">
      <h1>Select</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
            <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Alamat</th>
            <th class="px-4 py-3">Jenis Kelamin</th>
            <th class="px-4 py-3">Telepon</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($ms_buku as $member)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $member->kode_kategori }}</td>
            <td class="px-4 py-4">{{ $member->nama_kategori }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      <h1>Select Like "Tony"</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
            <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Alamat</th>
            <th class="px-4 py-3">Jenis Kelamin</th>
            <th class="px-4 py-3">Telepon</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($like as $like)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $like->kode_kategori }}</td>
            <td class="px-4 py-4">{{ $like->nama_kategori }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      <h1>Select Join Buku dengan Kategori</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
           <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Judul Buku</th>
            <th class="px-4 py-3">Kategori</th>
            <th class="px-4 py-3">Deskripsi</th>
            <th class="px-4 py-3">Jumlah</th>
            <th class="px-4 py-3">Cover</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($book as $buku)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $buku->kode_kategori }}</td>
            <td class="px-4 py-4">{{ $buku->nama_kategori }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      <h1>Select Join Buku dengan like judul buku HTML&CSS</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
           <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Judul Buku</th>
            <th class="px-4 py-3">Nama ms_buku</th>
            <th class="px-4 py-3">Tgl Pinjam</th>
            <th class="px-4 py-3">Tgl jatuh tempo</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($joinlike as $pinjam)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $pinjam->kode_kategori }}</td>
            <td class="px-4 py-4">{{ $pinjam->nama_kategori }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>

    </div>
  </div>
</body>
</html>