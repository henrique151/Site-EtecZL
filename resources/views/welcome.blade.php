<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ETEC Zona Leste</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  
  @vite('resources/css/app.css')
  <style>
    /* Adicione este estilo para alinhar a logo à esquerda */
    .logo-container {
      margin-right: auto; 
    }

    .logo-container-2 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Estilo para os links do menu */
    .nav-links {
      display: flex;
      gap: 20px;
    }

    /* Estilo para o botão do menu mobile */
    .menu-button {
      margin-left: auto; 
    }

  </style>
</head>

<body>
<header class="bg-black">
    <nav class="bg-black">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="logo-container">
                    <a href="/">
                        <h1 class="text-red-800 font-bold text-3xl sm:text-4xl lg:text-2xl">Etec</h1>
                        <span class="text-gray-300 px-2 font-normal sm:inline">Zona Leste</span>
                    </a>
                </div>
                <div class="sm:hidden">
                <button type="button" class="mobile-menu-button relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-red-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white " aria-controls="navigation-menu" aria-expanded="false" id="mobile-menu-button">
                        <span class="absolute -inset-0.5"></span>   
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                      </svg>
                      <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                </div>
                <div class="navigation-menu hidden sm:flex flex-1 justify-end items-center space-x-4 relative" id="navigation-menu">
                    <a href="/" class="bg-red-600 text-gray-300 rounded-md px-3 py-2 text-sm font-medium ml-5" aria-current="page">Início</a>
                    <div class="relative">
                        <button type="button" class="dropdown-toggle py-2 px-3 hover:bg-red-600 flex items-center gap-2 rounded ml:gap-0 ">
                            <span class="pointer-events-none select-none text-gray-300 font-medium text-sm">Cursos</span>
                            <svg class="w-3 h-3 pointer-events-none text-white "
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div
                            class="dropdown-menu absolute z-10 hidden bg-black text-white rounded-b-lg pb-2 w-48">
                            <a href="{{ url('cursosAdm') }}"
                                class="block px-6 py-2 hover:bg-red-600 rounded-2xl">Administração</a>
                            <a href="{{ url('cursosCont') }}"
                                class="block px-6 py-2 hover:bg-red-600 rounded-2xl">Contabilidade</a>
                            <a href="{{ url('cursosAds') }}"
                                class="block px-6 py-2 hover:bg-red-600 rounded-2xl">Desenvolvimento de Sistemas</a>
                            <a href="{{ url('cursosLog') }}"
                                class="block px-6 py-2 hover:bg-red-600 rounded-2xl">Logística</a>
                            <a href="{{ url('cursosRH') }}"
                                class="block px-6 py-2 hover:bg-red-600 rounded-2xl">Recursos Humanos</a>
                            <a href="{{ url('cursosSJ') }}"
                                class="block px-6 py-2 hover:bg-red-600 rounded-2xl">Serviços Jurídicos</a>
                        </div>
                    </div>
                    <a href="{{ url('instituicao') }}"
                        class="text-gray-300 hover:bg-red-600 rounded-md px-3 py-2 text-sm font-medium">Instituição</a>
                    <a href="{{ url('departamentos') }}"
                        class="text-gray-300 hover:bg-red-600 rounded-md px-3 py-2 text-sm font-medium">Departamentos</a>
                    <a href="{{ url('oportunidades') }}"
                        class="text-gray-300 hover:bg-red-600 rounded-md px-3 py-2 text-sm font-medium">Oportunidades</a>
                    <a href="{{ url('vestibulinho') }}"
                        class="text-gray-300 hover:bg-red-600 rounded-md px-3 py-2 text-sm font-medium">Vestibulinho</a>
                </div>
            </div>
        </div>
    </nav>
<!-- ===================== Header Sections =====================-->

<div class="relative isolate overflow-hidden bg-black py-24 sm:py-32 dark:bg-white-dark min-h-screen">
  <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
  <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ffff] to-[#FF0000] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ffff] to-[##FF0000] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="font-bold text-gray-400 sm:text-sm mt-20 ml-20">ETEC ZONA LESTE</h2>
      <p class="text-white text-3xl -bottom-2 relative tracking-tight ml-20 font-bold">Conheça a Etec Zona Leste: Excelência em Educação Técnica na Região da Zona Leste de São Paulo</p>
    </div>
    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
        <a href="#" class="bg-red-700 sm:text-base rounded-full px-5 ml-20">CONHEÇA A NOSSA HISTÓRIA <span aria-hidden="true">&rarr;</span></a>
      </div>
    </div>
  </div>
</div>

<!-- Seção 1 -->
<div class="flex flex-col justify-center md:flex-row items-center mt-5 text-white p-8 px-4 md:px-20 lg:px-20">
  <div class="md:w-1/2 overflow-hidden rounded-xl max-w-[467px] mx-auto md:order-2 md:ml-0 md:mr-32">
    <img class="w-full h-full object-cover" src="https://www.eteczonaleste.com.br/wp-content/uploads/2024/03/895d682d-b2b3-458e-a9a8-30cae4d3e38c-1.png" alt="Imagem de uma estrutura arquitetônica">
  </div>
  <div class="md:w-7/12 md:order-1 mt-4 md:mt-0 md:mr-4 md:ml-auto">
    <h1 class="text-2xl md:text-xl lg:text-xl font-bold mb-4" style="color: #E1E1D4">Descubra um futuro brilhante na ETEC Zona Leste</h1>
    <p class="font-normal text-base md:text-base lg:text-base" style="color: #CDC0C0">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
  </div>
</div>

<!-- Seção 2 -->
<div class="flex flex-col justify-center md:flex-row items-center mt-5 text-white p-8 px-4 md:px-20 lg:px-20">
  <div class="md:w-1/2 overflow-hidden rounded-xl max-w-[467px] mx-auto md:order-1 md:ml-0 md:mr-16">
    <img class="w-full h-full object-cover rounded-md" src="https://www.eteczonaleste.com.br/wp-content/uploads/2024/03/6aa4a7b4-0afa-4cf9-aba9-268decc1c8bc.jpeg" alt="Imagem de uma estrutura arquitetônica">
  </div>
  <div class="md:w-7/12 md:order-2 mt-4 md:mt-0 md:mr-auto md:ml-4">
    <h1 class="text-2xl md:text-xl lg:text-xl font-bold mb-4" style="color: #E1E1D4">Aprendizados para além da sala de aula</h1>
    <p class="font-normal text-base md:text-base lg:text-base" style="color: #CDC0C0">Buscamos levar o conhecimento para além da sala de aula tradicional.</br> Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos</br> preocupamos  com o desenvolvimento pessoal de nosso corpo </br> estudantil,  oferecendo suporte abrangente, orientação vocacional</br> e programas extracurriculares.</p>
  </div>
</div>

<!-- Seção 3 -->
<div class="flex flex-col justify-center md:flex-row items-center mt-5 text-white p-8 px-4 md:px-20 lg:px-20">
  <div class="md:w-1/2 overflow-hidden rounded-xl max-w-[467px] mx-auto md:order-2 md:ml-0 md:mr-32">
    <img class="w-full h-full object-cover" src="https://www.eteczonaleste.com.br/wp-content/uploads/2024/03/895d682d-b2b3-458e-a9a8-30cae4d3e38c-1.png" alt="Imagem de uma estrutura arquitetônica">
  </div>
  <div class="md:w-7/12 md:order-1 mt-4 md:mt-0 md:mr-4 md:ml-auto">
    <h1 class="text-2xl md:text-xl lg:text-xl font-bold mb-4" style="color: #E1E1D4">Infraestrutura Moderna</h1>
    <p class="font-normal text-base md:text-base lg:text-base mb-8" style="color: #CDC0C0">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
    <a href="#" class="bg-red-700 sm:text-xs rounded-full px-3 p-2 font-medium md:text-xs ms:px-4 ms:p-2">CONHEÇA NOSSA INFRAESTRUTURA <span aria-hidden="true">&rarr;</span></a>
  </div>
</div>

<!-- ===================== Cursos =====================-->

<div class="text-white p-10">
    <h1 class="text-4xl font-bold mb-10 text-center">Nossos Cursos</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      <div class="md:w-10/12 md:ml-10 p-4 rounded-lg" style="background: #141414">
        <div class="flex justify-center items-center mb-4">
          <img src="https://play-lh.googleusercontent.com/QoG-t9411tOjm-kQVhOcLocl8c-ii52FX6prPtwRrNNlqhQloP69LEf9eLk-BvV71g=s48">
        </div>
        <h2 class="text-2xl font-bold mb-2">Novotec Desenvolvimento de Sistemas AMS</h2>
        <p class="mb-5">É o profissional que analisa e projeta sistemas. Constrói, documenta, realiza...</p>
        <a href="#" class="text-red-500 sm:text-1xl font-medium">Clique para mais informação<span aria-hidden="true"></span></a>
      </div>
       
        <div class="md:w-10/12 md:ml-10 p-4 rounded-lg" style="background: #141414">
            <div class="flex justify-center items-center mb-4">
              <img src="https://play-lh.googleusercontent.com/QoG-t9411tOjm-kQVhOcLocl8c-ii52FX6prPtwRrNNlqhQloP69LEf9eLk-BvV71g=s48" >
            </div>
            <h2 class="text-2xl font-bold mb-2">Contabilidade</h2>
            <p class="mb-12">Matemática e língua portuguesa são disciplinas importantes para entender a co...</p>
            <a href="#" class="text-red-500 sm:text-1xl font-medium">Clique para mais informação<span aria-hidden="true"></span></a>
        </div>
        <div class="md:w-10/12 md:ml-10 p-4 rounded-lg" style="background: #141414">
            <div class="flex justify-center items-center mb-4">
                 <img src="https://play-lh.googleusercontent.com/QoG-t9411tOjm-kQVhOcLocl8c-ii52FX6prPtwRrNNlqhQloP69LEf9eLk-BvV71g=s48" >
            </div>
            <h2 class="text-2xl font-bold mb-2">Logística</h2>
            <p class="mb-12">Logística é o planjamento do caminho feito por um produto ou serviço até che...</p>
            <a href="#" class="text-red-500 sm:text-1xl font-medium">Clique para mais informação<span aria-hidden="true"></span></a>
        </div>
        <div class="md:w-10/12 md:ml-10   p-4 rounded-lg" style="background: #141414">
            <div class="flex justify-center items-center mb-4">
            <img src="https://play-lh.googleusercontent.com/QoG-t9411tOjm-kQVhOcLocl8c-ii52FX6prPtwRrNNlqhQloP69LEf9eLk-BvV71g=s48" >
            </div>
            <h2 class="text-2xl font-bold mb-2">Recursos Humanos</h2>
            <p class="mb-5">O estudante vai precisar de conhecimentos da língua portuguesa, matemática e ...</p>
            <a href="#" class="text-red-500 sm:text-1xl font-medium">Clique para mais informação<span aria-hidden="true"></span></a>
        </div>
        <div class="md:w-10/12 md:ml-10 p-4 rounded-lg" style="background: #141414">
            <div class="flex justify-center items-center mb-4">
                 <img src="https://play-lh.googleusercontent.com/QoG-t9411tOjm-kQVhOcLocl8c-ii52FX6prPtwRrNNlqhQloP69LEf9eLk-BvV71g=s48" >
            </div>
            <h2 class="text-2xl font-bold mb-2">Serviços Jurídicos</h2>
            <p class="mb-5" >Como o foco do curo está nas leis e normas, o aluno vai estudar as áreas do ...</p>
            <a href="#" class="text-red-500 sm:text-1xlf ont-medium">Clique para mais informação<span aria-hidden="true"></span></a>
        </div>
        <div class="md:w-10/12 md:ml-10 p-4 rounded-lg" style="background: #141414">
            <div class="flex justify-center items-center mb-4">
                 <img src="https://play-lh.googleusercontent.com/QoG-t9411tOjm-kQVhOcLocl8c-ii52FX6prPtwRrNNlqhQloP69LEf9eLk-BvV71g=s48" >
            </div>
            <h2 class="text-2xl font-bold mb-2">Administração</h2>
            <p class="mb-5">Como funcionam as organizações, desde empresas privadas até ONGs, passando po...</p>
            <a href="#" class="text-red-500 sm:text-1xlfont-medium">Clique para mais informação<span aria-hidden="true"></span></a>
        </div>
    </div>
</div>

<!-- ===================== Footer =====================-->
<footer class="bg-gray-100 dark:bg-black">
  <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="flex justify-center text-gray-600 dark:text-teal-300">
      <div class="logo-container-2 text-center">
        <h1 class="text-red-800 font-bold text-3xl">Etec</h1>
        <span class="text-gray-300 px-6 font-normal">Zona Leste</span>
      </div>
    </div>


    <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500 dark:text-gray-400">
      © 2024 Etec Zona Leste. Todos os direitos reservados.
      Desenvolvido por Aluno de DS Manhã
    </p>

    <ul class="mt-12 flex flex-col items-center sm:flex-row sm:justify-center gap-6 md:gap-8 lg:gap-12">
      <li>
        <a
        class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
          href="#"
        >
          Início
        </a>
      </li>

      <li>
        <a
          class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
          href="#"
        >
          Cursos
        </a>
      </li>

      <li>
        <a
          class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
          href="#"
        >
          Instituição
        </a>
      </li>

      <li>
        <a
          class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
          href="#"
        >
          Departamentos
        </a>
      </li>

      <li>
        <a
          class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
          href="#"
        >
          Oportunidades
        </a>
      </li>

      <li>
        <a
          class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
          href="#"
        >
          Vestibulinho
        </a>
      </li>
    </ul>

    <ul class="mt-12 flex justify-center gap-6 md:gap-8">
      <li>
        <a
          href="#"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
        >
          <span class="sr-only">Facebook</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path
              fill-rule="evenodd"
              d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </li>

      <li>
        <a
          href="#"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
        >
          <span class="sr-only">Instagram</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path
              fill-rule="evenodd"
              d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </li>

      <li>
        <a
          href="#"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
        >
          <span class="sr-only">Twitter</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path
              d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
            />
          </svg>
        </a>
      </li>

      <li>
        <a
          href="#"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75 dark:text-white dark:hover:text-white/75"
        >
          <span class="sr-only">GitHub</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path
              fill-rule="evenodd"
              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </li>
    </ul>
  </div>
</footer>
</header>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

    dropdownToggles.forEach((toggle) => {
      toggle.addEventListener("click", () => {
        const dropdownMenu = toggle.nextElementSibling;

        if (dropdownMenu.classList.contains("hidden")) {
          document.querySelectorAll(".dropdown-menu").forEach((menu) => {
            menu.classList.add("hidden");
          });

          dropdownMenu.classList.remove("hidden");
        } else {
          dropdownMenu.classList.add("hidden");
        }
      });
    });
    

      const mobileMenuButton = document.getElementById('mobile-menu-button');
  const navigationMenu = document.getElementById('navigation-menu');

  mobileMenuButton.addEventListener('click', () => {
    const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
    mobileMenuButton.setAttribute('aria-expanded', !expanded);
    navigationMenu.classList.toggle('hidden');
  });
  });
</script>
</body>
</html>
