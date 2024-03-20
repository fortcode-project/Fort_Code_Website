 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact" style="">
  <div class="section-header">
    <h2>Contacto</h2>
    <p style="font-family: arial;">Contacte-nos</p>
  </div>
    <div class="container" data-aos="fade-up">
  
        @foreach ($contact as $item)
          <div class="row gy-4">
  
            <div class="col-md-6">
              <div class="info-item  d-flex align-items-center">
                <i class="icon bi bi-map flex-shrink-0" style="background: var(--color); color: var(--letra)"></i>
                <div>
                  <h3>Endereço</h3>
                  <div>{{$item->endereco}}</div>
                </div>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-envelope flex-shrink-0" style="background: var(--color); color: var(--letra)"></i>
                <div>
                  <h3>Email</h3>
                  <div>{{$item->email}}</div>
                </div>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-md-6">
              <div class="info-item  d-flex align-items-center">
                <i class="icon bi bi-telephone flex-shrink-0" style="background: var(--color); color: var(--letra)"></i>
                <div>
                  <h3>Telefone</h3>
                  <div>+244 {{$item->telefone}}</div>
                </div>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-md-6">
              <div class="info-item  d-flex align-items-center">
                <i class="icon bi bi-share flex-shrink-0" style="background: var(--color); color: var(--letra)"></i>
                <div>
                  <h3>Atendimento</h3>
                  <div>
                    {{$item->atendimento}}
                  </div>
                </div>
              </div>
            </div><!-- End Info Item -->
  
          </div>
        @endforeach
        <div class=" row  col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-6">
            <form action="{{route("site.karamba.send.email")}}" method="post"  class="php-email-form-b p-2">
              @csrf
              <div class="row">
                <div class="col-xl-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
                </div>
                <div class="col-xl-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto..." required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem ...." required></textarea>
              </div>
              <div class="text-center">
                <button style="background: var(--color);" type="submit">Enviar</button>
              </div>
            </form><!--End Contact Form -->
          </div>
    
          <div class="col-md-6 mt-4  col-sm-12 col-xs-12 map-responsive">
            <iframe class="col p-1" width="600" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.702279296744!2d13.188649!3d-8.9072458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f4d88a49015f%3A0x1888d38a18c40ef0!2sTSE%20Luanda!5e0!3m2!1spt-PT!2sao!4v1710592735820!5m2!1spt-PT!2sao" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <style>
            .contact .container .map-responsive{
                overflow:hidden;
                padding-bottom:26%;
                position:relative;
                height:0;
              }

              .map-responsive iframe{
              left:0;
              top:0;
              height:100%;
              width:100%;
              position:absolute;
              }
          </style>

        </div>
    </div>
  </section>
  <!-- End Contact Section -->