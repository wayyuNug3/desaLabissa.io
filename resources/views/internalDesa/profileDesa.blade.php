@extends('dashboard.main')

@section('container')




<div class="row">
        {{-- sejarahDesa --}}
        <div class="col">
            <div class="card shadow-sm mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Sejarah Desa</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ullam saepe qui dolor consequatur possimus ea dolores sequi voluptatum delectus. Rem fuga accusamus, accusantium autem est porro obcaecati sequi repellendus delectus laudantium vero itaque eius recusandae cupiditate dolore nam quaerat cum voluptatibus vitae provident rerum? Nam, non perspiciatis sint nulla quisquam hic reiciendis temporibus? Eum facere est suscipit maiores. Distinctio error alias, nemo ducimus similique laboriosam. Dolor neque dolores repellendus quia consequatur esse eius maiores repellat suscipit sequi, unde earum impedit, iure a ipsa amet ratione est facilis tenetur. Voluptatum, error eos accusamus similique sapiente sequi repudiandae magni asperiores consequatur!</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius architecto dignissimos repellat consequatur illum aliquid temporibus nulla, deleniti sunt minima velit facere itaque rem corrupti unde accusamus, vitae odit dicta fuga. Necessitatibus eum cupiditate voluptatum, beatae voluptate ipsam qui ex quae labore aspernatur inventore? Error voluptatem aut odit cupiditate suscipit voluptates perspiciatis, temporibus debitis soluta corporis quod quo animi veniam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quo quos illum eius vel, libero tempora cumque maxime veritatis odio? Quos doloremque qui itaque debitis quod, voluptates vel dolorum. Voluptates doloribus quos blanditiis eveniet ducimus libero possimus! Vero esse nostrum cum, culpa eos impedit quasi sint nihil cupiditate quos, rem aliquam deserunt incidunt temporibus distinctio nobis amet, libero sed! Natus harum quisquam sed molestias, tempore quibusdam ipsum! Temporibus autem eveniet ipsum voluptate assumenda id laudantium aliquid explicabo fuga accusantium, esse sed magni eius officia expedita, ut iste corporis unde distinctio odit laboriosam nam odio. Ea officiis beatae, enim voluptate rem eligendi porro ipsum repellat aspernatur atque quia alias nemo incidunt itaque reprehenderit, dolores dicta inventore odio iusto nam tempore saepe? Ipsam quae vitae, consequatur facilis ea similique sequi recusandae excepturi fugiat voluptates quam deserunt inventore praesentium saepe? Ipsa ab laboriosam vitae explicabo ratione perspiciatis? Quo nam provident quidem. Eius exercitationem corrupti consequuntur rerum sunt culpa! Accusantium exercitationem tempora tempore sunt natus accusamus est nulla fugiat voluptate eligendi commodi alias, illo cum, porro expedita quasi non esse debitis. Deleniti, quam doloribus. Est eveniet quam quaerat aperiam magni sunt officia, mollitia eligendi beatae praesentium explicabo incidunt odit laudantium distinctio fuga nihil! Accusantium vero unde esse voluptas ipsum voluptates nisi expedita natus repudiandae, eius laboriosam modi harum nobis at deserunt minus provident ex quisquam quasi? Ipsum nam odio possimus officiis sequi voluptatibus laboriosam quo vitae, id minus, commodi natus dolor aperiam consequatur qui maiores? Quaerat sequi placeat, atque asperiores magni sit tempore neque iure temporibus voluptatibus, assumenda fuga! Doloremque, commodi aperiam, esse ipsum ea inventore eligendi ducimus minima aspernatur eveniet praesentium iste molestiae optio distinctio facere dolor quos minus reiciendis ullam rem velit quidem consequuntur sequi. Et non cupiditate harum sit quidem atque! Vero facilis atque ipsum, fugit necessitatibus maiores nobis illum asperiores!</p>

                        <button class="btn btn-primary btn-block"  data-toggle="modal" data-target="#modalSejarah">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- endSejarahDesa --}}

        {{-- lokasiDesa --}}
        <div class="col">
            <div class="card shadow-sm mb-4">
                <!-- Card Header - Accordion -->
                <a href="#lokasiDesa" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Lokasi Desa</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="lokasiDesa">
                    <div class="card-body">
                        <iframe 
                        width="600" 
                        height="450" 
                        style="border:0" 
                        loading="lazy" 
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ0Zj-b5kHli0RTyHGGdMRPwQ&key=AIzaSyDuna_VOE0PO0vgON9wRvGG3VgV9COIEBY">
                    </iframe>
                    </div>
                </div>
            </div>
        </div>
        {{-- endLokaasiDesa --}}

    </div>



  {{-- ModalSejarah --}}
  <div class="modal fade" id="modalSejarah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="20"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Edit</button>
        </div>
      </div>
    </div>
  </div>
  {{-- endModalSejarah --}}

@endsection