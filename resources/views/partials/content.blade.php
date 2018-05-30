<header>
    <div class="container mt-4" id='{{$navbar['home']}}'>
      <div class="row">
        
        <div class='hidden-xs-down col-md-4'>
          <a href="/hotel"><img src="/images/logo.png" width='60%'></a>  
        </div>

        
        <div class='hidden-sm-down col-md-8 text-md-right p-3'>
          <div>{{$info['alamat']}} </div>
          <div class='text-lg'><strong>(0341) 424-727</strong></div>
          <div>widehotels@gmail.com</div>
        </div>

      </div>
    </div>
</header>

<main>
  <!-- Carousel-->
  @component('comp.carousel')
    @slot('gambar1')
      /images/deluxe.png
    @endslot
    @slot('gambar2')
      /images/superiordeluxe.png
    @endslot
    @slot('gambar3')
      /images/superior.png
    @endslot
  @endcomponent
  

  <!--Deskripsi-->
 <div class="container my-5">
    <div class="row">
      <div class='col-12'>
        <p class="text-center hidden-sm-down text-xl text-muted">
          Dekat dengan Idjen Boulevard, Wilis, Museum Brawijaya dan akses kendaraan yang mudah (kendaraan Pribadi maupun angkutan umum).</i>
        </p>
      </div>
    </div>
  </div>


    
  <!--Review-->
  <div class='bg-faded my-3 py-5'>
    <div class="container">
      <div class="row">
        <div class='col-12'>
          <strong class='text-uppercase text-md'>
            Hasil Review
          </strong>
          {{-- <br>
          <img src='images/rating.png' width='100%'> --}}
          @component ('comp.progressbar')
            @slot('lebar1')
                85.9
            @endslot
            @slot('lebar2')
                84.2
            @endslot
            @slot('lebar3')
                81.0
            @endslot
            @slot('lebar4')
                90.4
            @endslot
            @slot('lebar5')
                84.5
            @endslot

            @slot('isi1')
                Cleanliness
            @endslot
            @slot('isi2')
                Comfort
            @endslot
            @slot('isi3')
                Meal
            @endslot
            @slot('isi4')
                Location
            @endslot
            @slot('isi5')
                Service
            @endslot
          @endcomponent

        </div>
      </div>
    </div>
    </div>

    <!--Kamar-->
    <div class='bg-faded py-5' id='{{$navbar['rooms']}}'>
      <div class="container" >
        <div class="row" >
          <div class='col-12 text-center font2 display-1 my-5'  style="background:#F1A9A0;">
            {{$navbar['rooms']}}
          </div>
          <!-- tampilan kamar  -->
          <div class="container hidden-lg-down">
            <div class="row">
              @foreach ($kamars as $kamar)
              <div class="col-sm-6">
                <div class="card-group">
                  <div class="card mb-4">
                    <img class="card-img-top rounded image43 " src="{{$kamar->gambar}}" alt="Wade Wilson Hotel" title="Wade Wilson Hotel" height="250">
                    <div class="card-body">
                      <h4 class="card-title font2 text-xl">{{$kamar->nama_kamar}}</h4>
                      <p class="card-text">
                        {{$kamar->deskripsi}}
                        <ul>
                          <li>{{$kamar->fasilitas}}</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Pesan-->
    <div class='bg-faded py-5' id='{{$navbar['book']}}'>
      <div class="container">
        <div class="row">
          <div class='col-12 text-center font2 display-1 mb-5'  style="background:#F1A9A0;">
            {{$navbar['book']}}
          </div>

          <div class='col mb-3 text-center'>
            <a href='#' class='btn btn-secondary btn-lg btn-block' data-toggle='modal' data-target='#callmodal'>Call (0341) 424-727</a>
            @component('comp.modal')
              @slot('modal_id')
                  callmodal
              @endslot
              @slot('mdltitle')
                  Call Me
              @endslot
              @slot('mdlbody')
                (0341) 424-727
              @endslot
              @slot('btmbtn')
                  Close
              @endslot
            @endcomponent
          </div>
          
          <div class='col mb-3 text-center'>
            <a data-toggle="modal" href='#myModal' class='btn btn-secondary btn-lg btn-block'>Reservasi</a>
            
              @component('comp.modal')
                @slot('modal_id')
                  myModal
                @endslot
                @slot('mdltitle')
                  Reservasi  
                @endslot
                @slot('mdlbody')
                  <form action="{{route('pesan.store')}} " method="post"> {{csrf_field()}}
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="nama_kamar">Jenis Kamar</label>
                        <select class="form-control" name="nama_kamar">
                        @foreach($kamars as $jnm)
                          <option  value="{{$jnm->nama_kamar}}">{{$jnm->nama_kamar}} </option>  
                        @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="nama_tamu">Nama</label>
                        <input type="text" class="form-control" name="nama_tamu">
                      </div>
                      <div class="form-group">
                        <label for="nomor_telfon">No. Telepon</label>
                        <input type="text"  onkeypress=" return isNumberKey(event)" class="form-control" name="nomor_telfon">
                      </div>
                      <div class="form-group">
                        <label for="check_in">Tanggal Check In</label>
                        <input type="date" class="form-control" name="check_in">
                      </div>
                      <div class="form-group">
                        <label for="check_out">Tanggal Check Out</label>
                        <input type="date" class="form-control" name="check_out">
                      </div>
                  </div>
                @endslot
                @slot('btmbtn')
                  Simpan
                @endslot
              @endcomponent
              </form>
          </div>

          <div class='col mb-3 text-center'>
            <a href="#" class='btn btn-secondary btn-lg btn-block' data-toggle='modal' data-target='#emailmodal'>Email widehotels@gmail.com</a>
            @component('comp.modal')
              @slot('modal_id')
                  emailmodal
              @endslot
              @slot('mdltitle')
                  Email
              @endslot
              @slot('mdlbody')
                tes
              @endslot
              @slot('btmbtn')
                  Close
              @endslot
            @endcomponent
          </div>

        </div>
      </div>
    </div>

    <!--Resto-->

    <div class='bg-faded py-5' id='{{$navbar['resto']}}'>
      <div class="container">
        <div class="row">
          <div class='col-12 text-center font2 display-1 my-5'  style="background:#F1A9A0;">
            {{$navbar['resto']}}
          </div>
            @component('comp.container1')
              @slot('judul')
                  Amethyst Restaurant
              @endslot
              @slot('isi')
                  Amethyst Restaurant mengusung nuansa alam dimana restaurant ini merupakan outdoor restaurant dan diiringi alunan musik membuat suasana liburan anda semakin sempurna dan menjadi moment yang tak terlupakan. Amethyst Restaurant menyediakan berbagai macam menu masakan baik masakan nusantara, continental dan oriental yang tentunya semuanya itu dikemas dengan harga yang terjangkau.
              @endslot
              @slot('gambar')
                  images/restaurant.png
              @endslot
            @endcomponent
          </div>
      </div>
    </div>

    <!--Aula-->
    
      <div class='bg-faded py-5' id='{{$navbar['hm']}}'>
        <div class="container">
          <div class="row">
            <div class='col-12 text-center font2 display-1 my-5'  style="background:#F1A9A0;">
            {{$navbar['hm']}}
            </div>
              @component('comp.container2')
                @slot('judul')
                    DIAMOND HALL
                @endslot
                @slot('isi')
                    Wide Hotel &amp; Cottage juga menyediakan Hall berkapasitas 150 orang yang dilengkapi dengan berbagai perlengkapan seperti Sound System, Wireless Mic, LCD Proyektor, Whiteboard dan Flipboard yang dapat dipakai untuk mensupport kebutuhan event para tamu baik itu wedding receptions, meeting, seminar, atau bahkan acara-acara seperti reuni keluarga.
                @endslot
                @slot('gambar')
                    images/hall.png
                @endslot
              @endcomponent
              @component('comp.container1')
                @slot('judul')
                    GOLD ROOM 1 &amp; 2
                @endslot
                @slot('isi')
                    Wide Hotel &amp; Cottage juga memiliki 2 buah ruang meeting dengan kapasitas yang lebih kecil untuk melayani kebutuhan anda. Gold Room ini berkapasitas 30 orang dan dilengkapi dengan berbagai perlengkapan seperti Sound System, Wireless Mic, LCD Proyektor, Whiteboard dan Flipboard sehingga tamu kami tidak perlu repot-repot lagi untuk mempersiapkan perlengkapan tersebut
                @endslot
                @slot('gambar')
                    images/hall2.png
                @endslot
              @endcomponent
          </div>
        </div>
      </div>
      
      <div class='bg-faded py-5' id='#'>
        <div class="container">
          <div class="row">
            <div class='col-12 text-center font2 display-1 my-5'  style="background:#F1A9A0;">
            Gallery
            </div>
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="card-columns">
                    <picture>
                    <div class="card"><img class="card-img img-fluid img-thumbnail" src="/images/cottage.png"></div>
                    <div class="card"><img class="card-img img-fluid img-thumbnail" src="/images/hall2.png"></div>
                    <div class="card"><img class="card-img img-fluid img-thumbnail" src="/images/hall.png"></div>
                    <div class="card"><img class="card-img img-fluid img-thumbnail" src="/images/restaurant.png"></div>
                    <div class="card"><img class="card-img img-fluid img-thumbnail" src="/images/deluxe.png"></div>
                    <div class="card"><img class="card-img img-fluid img-thumbnail" src="/images/superiordeluxe.png"></div>
                    </picture>
                  </div>
                </div>
              </div>
            </div>
    </main>