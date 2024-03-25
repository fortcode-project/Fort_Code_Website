<!-- Footer -->
  <footer id="footer" class="footer" style="background: var(--color); color: var(--letra);">

    <div class="container-fluid">
      @foreach ($contact as $item)
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Endereço</h4>
              <p>
                {{$item->endereco}}
              </p>
              <div>
                <a class="text-white" href="https://www.pachecobarroso.com/pb-privacy-policy" target="_blank">Politicas de Privacidade</a>    | 
                <a class="text-white" href="https://www.pachecobarroso.com/pb-terms-conditions" target="_blank">Termos e Condições</a>
              </div>
            </div>
            

          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Reservas</h4>
              <p>
                <strong>Telefone:  </strong>+244 {{$item->telefone}}<br>
                <strong>Email:  </strong>{{$item->email}}<br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Hora de Funcionamento</h4>
              <p>
                <strong>{{$item->atendimento}}</strong> 
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Siga-nos</h4>
            <div class="social-links d-flex">
              <a href="https://www.instagram.com/fortcode_dev?igsh=MTRudnk0aW5zZ2RjcQ==" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>  
          </div>

        </div>
      @endforeach
    </div>

    <div class="container-fluid">
      <div class="copyright">
        &copy; Copyright 2024 <strong><span>Fort-Code</span></strong>. Todos direitos reservados
      </div>
    </div>

  </footer>
  <!-- End Footer -->