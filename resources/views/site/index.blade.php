@extends('site.layouts.corpo')

@section('subtitulo', 'Home')

@section('conteudo')
    <header id="container-header">
        <div id="cabecalho">
            <div  class="cabecalho-info">
                <div>
                    <h1>GetJob</h1>
                </div>
                <div>
                    <div id="botao-tema" onclick="trocaTema()">
                        <button><img id="foto-botao-tema" src="{{asset('user/img/contrast_FILL0_wght400_GRAD0_opsz24.svg')}}" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="cabecalho-busca" onclick="busca()">
                <input type="text" name="" id="input-busca" placeholder="Nome/Curso do candidato">
            </div>
        </div>
    </header>
    <main style="background-image: url('{{ asset('user/img/bg-job.jpg')}}');">
        <div class="cards">
            <div class="card" id="card" onclick="abrirModal(this)" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/download.jpg')}}" alt="foto-usuario">
                        <div>
                            <p>Manoel Gomes</p>
                            <p>Formado em Música</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ab quibusdam odit quod nemo incidunt officiis quas dolores corrupti earum voluptatem, illo dignissimos sed vitae sit natus quo doloribus. Odit nostrum animi et obcaecati? Atque nihil corrupti quae hic ratione!
                    </div>
                </div>
            </div>
            <div class="card" id="card" onclick="abrirModal(this)" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/ednaldo.jpg')}}" alt="foto-usuario">
                        <div>
                            <p>Ednaldo Pereira</p>
                            <p>Formado em Música</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ab quibusdam odit quod nemo incidunt officiis quas dolores corrupti earum voluptatem, illo dignissimos sed vitae sit natus quo doloribus. Odit nostrum animi et obcaecati? Atque nihil corrupti quae hic ratione!
                    </div>
                </div>
            </div>
            <div class="card" id="card" onclick="abrirModal(this)" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/julius.jpg')}}" alt="foto-usuario">
                        <div>
                            <p>Julius Rock</p>
                            <p>Cursando Economia</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ab quibusdam odit quod nemo incidunt officiis quas dolores corrupti earum voluptatem, illo dignissimos sed vitae sit natus quo doloribus. Odit nostrum animi et obcaecati? Atque nihil corrupti quae hic ratione!
                    </div>
                </div>
            </div>
            <div class="card" id="card" onclick="abrirModal(this)" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/james.jpg')}}" alt="foto-usuario">
                        <div>
                            <p>James da Salada</p>
                            <p>Formado em Gastronomia</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, recusandae nesciunt, debitis unde earum ipsam explicabo non harum, illum adipisci amet exercitationem tempora. Ut delectus dolores omnis quo voluptatum similique modi corrupti est quas deleniti. Culpa repellat dicta iste officia eum impedit alias error accusantium nulla iure voluptatem, pariatur voluptatibus nemo assumenda blanditiis laudantium. Nisi placeat possimus quae perferendis minus repellendus aliquid libero iure cupiditate! Nobis enim eligendi possimus beatae aliquam reiciendis perferendis obcaecati delectus provident veritatis ullam reprehenderit, tempora labore exercitationem quas consectetur, amet eius, quibusdam praesentium nemo ex. Cumque nemo similique, aperiam repellendus, atque ad veniam eaque accusamus porro minima pariatur numquam corporis consectetur, minus iusto quae sed blanditiis sunt temporibus saepe unde. Enim eligendi, dicta ut dignissimos ad cumque quasi repellat voluptatem, quos, saepe aliquid necessitatibus! Veniam debitis nam, fugiat blanditiis nemo quas tempora architecto necessitatibus sint nihil, veritatis possimus molestiae quidem iusto! Modi reiciendis consequuntur quaerat?
                    </div>
                </div>
            </div>
            <div class="card" id="card" onclick="abrirModal(this)" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/serjao.png')}}" alt="foto-usuario">
                        <div>
                            <p>Serjão Sacani</p>
                            <p>Formado em geofísica</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, laborum et, perferendis itaque autem doloremque reiciendis laudantium eum atque maiores rerum necessitatibus magnam ab repellat? Esse neque vero nostrum atque at iure porro enim a ullam! Sapiente corrupti aspernatur optio quaerat nemo, odio ab explicabo tenetur. Impedit nisi provident perferendis! Voluptates ullam reiciendis, architecto deserunt sequi quisquam nemo eveniet optio, temporibus vitae quis. Molestias nobis a accusamus magnam illum enim ex totam, veniam quam ratione laboriosam fugiat consequuntur repudiandae dolores corporis natus sit cumque, delectus molestiae aliquam, nisi earum? Error rerum, rem necessitatibus aperiam distinctio nobis illum neque consequatur fugiat, reprehenderit tempore sunt quo eveniet molestias ipsum in magni adipisci nulla ratione aliquid nisi blanditiis exercitationem nemo! Nulla eveniet enim quam culpa deserunt possimus accusantium, quae laborum perspiciatis fuga obcaecati sequi doloribus hic molestias inventore quia, voluptas ipsam vero blanditiis praesentium deleniti, commodi et esse! Eligendi iste harum incidunt quod maxime voluptatum esse officia a quidem, adipisci commodi, obcaecati, non debitis magni? Illum atque est sint, quod placeat corrupti eum aliquam porro suscipit molestias possimus cum libero consequatur magnam dolorem modi hic exercitationem quaerat voluptate? Odio nemo voluptas impedit ut amet qui optio reprehenderit pariatur veritatis dolorum eos laboriosam veniam officia necessitatibus, harum earum libero distinctio assumenda recusandae dolorem culpa facilis tempore? Quisquam enim odio recusandae non aperiam molestias repellat perferendis temporibus at provident cum ipsa nulla voluptate, magni obcaecati blanditiis tempore quibusdam exercitationem veniam voluptates, doloribus quis repudiandae iure. Vel praesentium ad iure labore? Voluptate consequatur dolorem aliquid debitis illum sapiente quo, pariatur aspernatur explicabo omnis dicta eos voluptatem veniam voluptatibus recusandae sequi eligendi facere tenetur, corporis officia placeat maiores. Asperiores iste repellendus, explicabo a repellat rem. Recusandae tempora ut deserunt ab? Optio quo cum porro sit architecto totam rem pariatur, est necessitatibus, dolorem debitis aut ratione reiciendis enim? Harum magnam cupiditate corporis recusandae dolore reprehenderit? Unde voluptates dignissimos qui voluptatum esse consectetur dicta placeat nesciunt deleniti? Expedita cupiditate amet vel quia quos autem numquam architecto inventore at, perspiciatis eligendi commodi similique nemo quae molestias veniam illum nostrum. Placeat laborum nihil nam nulla sunt assumenda optio in neque fuga.
                    </div>
                </div>
            </div>
            <div class="card" id="card" onclick="abrirModal(this)" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/download.jpg')}}" alt="foto-usuario">
                        <div>
                            <p>Manoel Gomes</p>
                            <p>Formado em Música</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ab quibusdam odit quod nemo incidunt officiis quas dolores corrupti earum voluptatem, illo dignissimos sed vitae sit natus quo doloribus. Odit nostrum animi et obcaecati? Atque nihil corrupti quae hic ratione!
                    </div>
                </div>
            </div>
            <div class="card" id="card" onclick="abrirModal(this)" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/ednaldo.jpg')}}" alt="foto-usuario">
                        <div>
                            <p>Ednaldo Pereira</p>
                            <p>Formado em Música</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ab quibusdam odit quod nemo incidunt officiis quas dolores corrupti earum voluptatem, illo dignissimos sed vitae sit natus quo doloribus. Odit nostrum animi et obcaecati? Atque nihil corrupti quae hic ratione!
                    </div>
                </div>
            </div>
            <div class="card" id="card" onclick="abrirModal(this)" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/images.jpg')}}" alt="foto-usuario">
                        <div>
                            <p>Julius Rock</p>
                            <p>Cursando Economia</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ab quibusdam odit quod nemo incidunt officiis quas dolores corrupti earum voluptatem, illo dignissimos sed vitae sit natus quo doloribus. Odit nostrum animi et obcaecati? Atque nihil corrupti quae hic ratione!
                    </div>
                </div>
            </div>
            <div class="card" id="card" onclick="abrirModal(this)" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/james.jpg')}}" alt="foto-usuario">
                        <div>
                            <p>James da Salada</p>
                            <p>Formado em Gastronomia</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, recusandae nesciunt, debitis unde earum ipsam explicabo non harum, illum adipisci amet exercitationem tempora. Ut delectus dolores omnis quo voluptatum similique modi corrupti est quas deleniti. Culpa repellat dicta iste officia eum impedit alias error accusantium nulla iure voluptatem, pariatur voluptatibus nemo assumenda blanditiis laudantium. Nisi placeat possimus quae perferendis minus repellendus aliquid libero iure cupiditate! Nobis enim eligendi possimus beatae aliquam reiciendis perferendis obcaecati delectus provident veritatis ullam reprehenderit, tempora labore exercitationem quas consectetur, amet eius, quibusdam praesentium nemo ex. Cumque nemo similique, aperiam repellendus, atque ad veniam eaque accusamus porro minima pariatur numquam corporis consectetur, minus iusto quae sed blanditiis sunt temporibus saepe unde. Enim eligendi, dicta ut dignissimos ad cumque quasi repellat voluptatem, quos, saepe aliquid necessitatibus! Veniam debitis nam, fugiat blanditiis nemo quas tempora architecto necessitatibus sint nihil, veritatis possimus molestiae quidem iusto! Modi reiciendis consequuntur quaerat?
                    </div>
                </div>
            </div>
            <div class="card" id="card" onclick="abrirModal(this)" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/serjao.png')}}" alt="foto-usuario">
                        <div>
                            <p>Serjão Sacani</p>
                            <p>Formado em geofísica</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, laborum et, perferendis itaque autem doloremque reiciendis laudantium eum atque maiores rerum necessitatibus magnam ab repellat? Esse neque vero nostrum atque at iure porro enim a ullam! Sapiente corrupti aspernatur optio quaerat nemo, odio ab explicabo tenetur. Impedit nisi provident perferendis! Voluptates ullam reiciendis, architecto deserunt sequi quisquam nemo eveniet optio, temporibus vitae quis. Molestias nobis a accusamus magnam illum enim ex totam, veniam quam ratione laboriosam fugiat consequuntur repudiandae dolores corporis natus sit cumque, delectus molestiae aliquam, nisi earum? Error rerum, rem necessitatibus aperiam distinctio nobis illum neque consequatur fugiat, reprehenderit tempore sunt quo eveniet molestias ipsum in magni adipisci nulla ratione aliquid nisi blanditiis exercitationem nemo! Nulla eveniet enim quam culpa deserunt possimus accusantium, quae laborum perspiciatis fuga obcaecati sequi doloribus hic molestias inventore quia, voluptas ipsam vero blanditiis praesentium deleniti, commodi et esse! Eligendi iste harum incidunt quod maxime voluptatum esse officia a quidem, adipisci commodi, obcaecati, non debitis magni? Illum atque est sint, quod placeat corrupti eum aliquam porro suscipit molestias possimus cum libero consequatur magnam dolorem modi hic exercitationem quaerat voluptate? Odio nemo voluptas impedit ut amet qui optio reprehenderit pariatur veritatis dolorum eos laboriosam veniam officia necessitatibus, harum earum libero distinctio assumenda recusandae dolorem culpa facilis tempore? Quisquam enim odio recusandae non aperiam molestias repellat perferendis temporibus at provident cum ipsa nulla voluptate, magni obcaecati blanditiis tempore quibusdam exercitationem veniam voluptates, doloribus quis repudiandae iure. Vel praesentium ad iure labore? Voluptate consequatur dolorem aliquid debitis illum sapiente quo, pariatur aspernatur explicabo omnis dicta eos voluptatem veniam voluptatibus recusandae sequi eligendi facere tenetur, corporis officia placeat maiores. Asperiores iste repellendus, explicabo a repellat rem. Recusandae tempora ut deserunt ab? Optio quo cum porro sit architecto totam rem pariatur, est necessitatibus, dolorem debitis aut ratione reiciendis enim? Harum magnam cupiditate corporis recusandae dolore reprehenderit? Unde voluptates dignissimos qui voluptatum esse consectetur dicta placeat nesciunt deleniti? Expedita cupiditate amet vel quia quos autem numquam architecto inventore at, perspiciatis eligendi commodi similique nemo quae molestias veniam illum nostrum. Placeat laborum nihil nam nulla sunt assumenda optio in neque fuga.
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('user/js/script.js')}}" ></script>
@endsection
@section('modal')
    <div class="janela-modal" id="janela-modal">
        <div class="modal" style="background-image: url('{{ asset('user/img/bg-job.jpg')}}');">
            <button class="fechar" id="fechar">X</button>
            <div class="modal-cabecalho">
            </div>
            <div class="modal-corpo">
            </div>
        </div>
    </div>
@endsection