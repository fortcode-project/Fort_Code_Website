<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class=" d-flex justify-center justify-content-center">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdlXCBxu2asvzeKNqg37OzUpD__GqBKHnsJfeCvCEqbbrfYMw/viewform?embedded=true" style="width: 1000px" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            {{-- <form id="regForm" action="{{route("site.karamba.website")}}" method="POST">
              @csrf
              <div class="tab">
                <div style="margin-bottom: 8px;">
                  <h3 class=" text-capitalize">Informações Pessoais</h3>
                </div>

                <p><input name="name" class="form-control" placeholder="Primeiro nome..." oninput="this.className = ''" required></p>
                <p><input name="ultimonome" class="form-control" placeholder="Ultimo nome..." oninput="this.className = ''" required></p>
                <p><input name="telefone" class="form-control" onkeypress="$(this).mask('+244 900 000 000')" placeholder="Insira o numero de telefone..." oninput="this.className = ''" required></p>
                <p><input name="email" class="form-control"  type="email" placeholder="Qual é o seu email pessoal..." oninput="this.className = ''" required></p>
                <p><input name="coorporativo" class="form-control" type="email" placeholder="Qual é o seu email coorporativo..." oninput="this.className = ''" required></p>
                <p><input name="representante" class="form-control" placeholder="És um representante legal da empresa..." oninput="this.className = ''" required></p>
              </div>
              
              <div class="tab mb-3">
                <div style="margin-bottom: 8px;">
                  <h3>Sobre a Empresa (1/2)</h3>
                </div>
                <div class="form-group">
                  <input name="company" class="form-control" placeholder="Qual é o nome da empresa?" oninput="this.className = ''">
                </div>
                <div class="form-group p-2 fs-4">
                  <select name="negocio" class="form-control">
                      <option disabled selected>Qual é o tipo/categoria do seu negocio?</option>
                      <option value="Produtos">Produtos</option>
                      <option value="Serviços">Serviços</option>
                      <option value="Disseminação de Informação">Disseminação de Informação</option>
                  </select>
                </div>

                <div class="form-group p-2 fs-4">
                  <select name="status" class="form-control">
                      <option disabled selected>Qual é o status da sua organização?</option>
                      <option value="Empresa Incorporada">Empresa Incorporada</option>
                      <option value="Freelancer/prestador de serviço em nome próprio (usa o seu nif)">Freelancer/prestador de serviço em nome próprio (usa o seu nif)</option>
                  </select>
                </div>

                <div class="form-group p-2 fs-4">
                  <select name="tempo" class="form-control">
                      <option disabled selected>A quanto tempo está no mercado?</option>
                      <option value="0-1 ano">0 - 1 ano</option>
                      <option value="1 - 3 anos">1 - 3 anos</option>
                      <option value="3 - 5 anos">3 - 5 anos</option>
                      <option value="5 - 10 anos">5 - 10 anos</option>
                      <option value="Mais de 10 anos">Mais de 10 anos</option>
                  </select>
                </div>                

              </div>
              
              <div class="tab mb-3">
                <div style="margin-bottom: 8px;">
                  <h3>Sobre a Empresa (2/2)</h3>
                </div>

                <div class="form-group p-2 fs-4">
                  <select name="organizacao" class="form-control border-1">
                      <option disabled selected>Quem é o seu cliente primário?</option>
                      <option value="Individuos">Individuos</option>
                      <option value="Empresas">Empresas</option>
                      <option value="Estado">Estado</option>
                  </select>
                </div>

                <div class="form-group p-2 fs-4">
                  <p><input name="industria" class="form-control" placeholder="Qual é a industria da sua organização?" oninput="this.className = ''"></p>
                </div>

                <div class="form-group p-2 fs-4">
                  <p><input name="nif" class="form-control" placeholder="Qual é o NIF da empresa (se for incorporado) ou pessoal?" oninput="this.className = ''"></p>
                </div>
                
                <div class="form-group p-2 fs-4">
                  <select name="rendimento" class="form-control">
                      <option disabled selected>Qual é o rendimento médio mensal da sua empresa?</option>
                      <option value="0 - 500.000">AOA 0 - 500.000</option>
                      <option value="500.000 - 1.000.000">AOA 500.000 - 1.000.000</option>
                      <option value="1.000.000 - 5.000.000">AOA 1.000.000 - 5.000.000</option>
                      <option value="5.000.000 - 10.000.000">AOA 5.000.000 - 10.000.000</option>
                  </select>
                </div>

                <div class="form-group p-2 fs-4">
                  <select name="website" class="form-control">
                      <option disabled selected>Tem um domínio para o seu website?</option>
                      <option value="O que é isso?">O que é isso?</option>
                      <option value="Não">Não</option>
                      <option value="Não – mas já pensei qual gostaria de ter – qual?">Não – mas já pensei qual gostaria de ter – qual?</option>
                      <option value="Sim – qual?">Sim – qual?</option>
                  </select>
                </div>

                <div class="form-group p-2 fs-4">
                  <p><input name="dominio" class="form-control" placeholder="Digite aqui o seu dominio..." oninput="this.className = ''"></p>
                </div>
              </div>
              
              <div class="tab mb-3">
                <div style="margin-bottom: 8px;" class=" mb-2">
                  <h3>Agregar Valor</h3>
                </div>
                <div class="form-group fs-4 mb-3">
                  <div class="mb-3 form-control" style="border: solid 2px #ffdddd;">
                    <h3>Gostaria de ter alguma das funcionalidades não incluídas no pacote gratuito?</h3>
                  </div>
                    <div style="margin-left: -30px;">
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id="funcionalidade" autocomplete="off" name="funcionalidade[]" value="Loja online">
                        <label class="btn btn-outline-primary" for="funcionalidade">Loja online</label>
                      </div>
                      <div class="form-check form-check-inline" style="margin-left: -15px;">
                        <input type="checkbox" class="btn-check" id="funcionalidade1" autocomplete="off" name="funcionalidade[]" value="Gestão de stock">
                        <label class="btn btn-outline-primary" for="funcionalidade1">Gestão de stock</label>
                      </div>
                      
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id="funcionalidade2" autocomplete="off" name="funcionalidade[]" value="Sistema de faturação">
                        <label class="btn btn-outline-primary" for="funcionalidade2">Sistema de faturação</label>
                      </div>
                      
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id="funcionalidade3" autocomplete="off" name="funcionalidade[]" value="Sistema de agendamentos">
                        <label class="btn btn-outline-primary" for="funcionalidade3">Sistema de agendamentos</label>
                      </div>
                      
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id=funcionalidade4" autocomplete="off" name="funcionalidade[]" value="Link para clientes no WhatsApp">
                        <label class="btn btn-outline-primary" for=funcionalidade4">Link para clientes no WhatsApp</label>
                      </div>
                      
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id=funcionalidade5" autocomplete="off" name="funcionalidade[]" value="Ajuda para escrever os Termos e Condições e de Privacidade do website">
                        <label class="btn btn-outline-primary" for="funcionalidade5">Escrever os Termos e Condições do website</label>
                      </div>
                    </div>
                </div>

                <div class="form-group fs-4 mb-3 price">
                  <div class="mb-3 form-control" style="border: solid 2px #ffdddd;">
                    <h3>Se o website fosse cobrado – qual é o mínimo e o máximo que pagaria em Kwanzas por mês?</h3>
                  </div>
                    <div style="margin-left: -30px;">
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id="price" autocomplete="off" name="price[]" value="5.000">
                        <label class="btn btn-outline-primary" for="price">5.000</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id="price1" autocomplete="off" name="price[]" value="10.000">
                        <label class="btn btn-outline-primary" for="price1">10.000</label>
                      </div>
                      
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id="price2" autocomplete="off" name="price[]" value="30.000">
                        <label class="btn btn-outline-primary" for="price2">20.000</label>
                      </div>
                      
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id="price3" autocomplete="off" name="price[]" value="50.000">
                        <label class="btn btn-outline-primary" for="price3">30.000</label>
                      </div>
                      
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id="price4" autocomplete="off" name="price[]" value="70.000">
                        <label class="btn btn-outline-primary" for="price4">40.000</label>
                      </div>
                      
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="btn-check" id="price5" autocomplete="off" name="price[]" value="100.000">
                        <label class="btn btn-outline-primary" for="price5">50.000</label>
                      </div>
                    </div>
                </div>
              </div>
              
              <div style="overflow:auto;">
                <div style="float:right;">
                  <button class="btn btn-primary px-3 fs-5 mx-3" type="button" id="prevBtn" onclick="nextPrev(-1)">Voltar</button>
                  <button class="btn btn-primary px-3 fs-5" type="button" id="nextBtn" onclick="nextPrev(1)">Seguinte</button>
                </div>
              </div>

              <h1 id="processar"></h1>

              <!-- Circles which indicates the steps of the form: -->
              <div style="text-align:center;margin-top:-30px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
              </div>              
            </form> --}}
          </div>
      </div>
    </div>
  </div>
</div>

  <style>
    /* Style the input fields */
    input {
      padding: 10px !important;
      font-size: 20px !important;
      width: 100% !important;
      border: solid 2px #c0c0c0 !important;
    }
    select{
      padding: 10px !important;
      font-size: 20px !important;
      border: solid 2px #c0c0c0 !important;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
      display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }

    /* Mark the active step: */
    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #04AA6D;
    }
  </style>