<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ETEC Zona Leste</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
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
                    <a href="/" class="hover:bg-red-600 text-gray-300 rounded-md px-3 py-2 text-sm font-medium ml-5" aria-current="page">Início</a>
                    <div class="relative">
                        <button type="button" class="dropdown-toggle py-2 px-3 bg-red-600 flex items-center gap-2 rounded ml:gap-0 ">
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

<div class="relative isolate overflow-hidden bg-black py-24 sm:py-32 dark:bg-white-dark min-h-[630px] after:content-[''] after:h-full after:w-full after:absolute after:left-0 after:top-0 after:bg-[#1414149c] ">
  <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/08/123123-1.webp" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center after:bg-[#1414149c]">
  <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ffff] to-[#FF0000] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ffff] to-[##FF0000] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <p class="text-white text-3xl -bottom-2 relative tracking-tight font-bold z-50 mt-24">Novotec Desenvolvimento de Sistemas DS/AMS</p>
      <p class="text-white text-lg mt-10 font-noraml relative z-50 ">Modalidade totalmente presencial permite que, em um período de cinco anos, o estudante conclua os ensinos nos níveis Médio, Técnico (ETEC) e Superior (FATEC). </p>
    </div>
    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
      </div>
    </div>
  </div>
</div>

<!-- ===================== About 1 =====================-->

<div class="flex flex-col justify-center md:flex-row items-center mt-5 text-white p-8 md:px-20">
    <div class="md:w-1/2 overflow-hidden rounded-xl max-w-[600px] mx-auto md:order-2">
        <img class="w-full h-full object-cover mt-10 md:mt-0 rounded-xl ml-3" src="https://img.freepik.com/fotos-premium/jovem-desenvolvedor-de-software-serio-trabalhando-na-frente-de-monitores-de-computador_274679-40351.jpg?w=740" alt="Imagem de uma estrutura arquitetônica">
    </div>
    <div class="md:w-1/2 md:ml-10 md:order-1">
        <h1 class="text-3xl font-bold mb-4" style="color: #E1E1D4">Sobre</h1>
        <p class="font-normal text-base mb-7 text-justify" style="color: #CDC0C0">O programa AMS – Formação Articulada Médio-Técnica e Superior – oferece uma formação completa em cinco anos, integrando o Ensino Médio (Etec) com o Ensino Superior Tecnológico (Fatec). </br></br>O curso Novotec em Desenvolvimento de Sistemas AMS é oferecido na Etec e Fatec Zona Leste desde o ano de 2019, sendo esta escola pioneira na implantação deste novo modelo não só no Centro Paula Souza (CPS) como em São Paulo e no Brasil e conta com parceria com a IBM, que propicia mentorias aos alunos durante o Ensino Médio-Técnico assim como possibilita estágio aos alunos durante o Ensino Superior. </br></br> O aluno ingressa no Ensino Médio com Habilitação Profissional de Técnico no curso de Desenvolvimento de Sistemas (DS) na Etec da Zona Leste, cursa os 3 anos de Ensino Médio-Técnico já na Fatec Zona Leste, podendo, após concluir esta fase, ingressar diretamente sem processo seletivo (vestibular) no Curso Superior em Análise e Desenvolvimento de Sistemas (ADS-AMS) na Fatec Zona Leste</p>
        <a href="#" class="bg-red-700 sm:text-1xl rounded-full px-10 p-1 font-medium ">ENTRE EM CONTATO <span aria-hidden="true">&rarr;</span></a>
      </div>
</div>

<!-- ===================== About 2 =====================-->

<div class="flex flex-col justify-left md:flex-row items-center mt-5 text-white p-8 md:px-20">
    <div class="md:w-2/2 md:ml-10">
        <h1 class="text-3xl font-bold mb-4 text-justify" style="color: #E1E1D4">Inscrição</h1>
        <p class="font-normal text-base mb-7 text-justify" style="color: #CDC0C0">O processo de ingresso é via vestibulinho na Etec Zona Leste e ocorre em meados do mês de novembro pelo site <span class="text-blue-500"><a href="">www.vestibulinhoetec.com.br</span>, onde o ingressante deverá optar pela unidade Extensão Fatec da Zona Leste, período tarde e curso Novotec Desenvolvimento de Sistemas AMS. </br> </br> O ingressante poderá se preparar realizando testes com as provas dos vestibulinhos de anos anteriores (<span class="text-blue-500">www.vestibulinhoetec.com.br/provas-gabaritos/<a href="www.vestibulinhoetec.com.br/provas-gabaritos/"></a>)</span></p>
  </div>
</div>

<!-- ===================== About 3 =====================-->

<div class="flex flex-col justify-center md:flex-row items-center mt-5 text-white p-8 md:px-20">
    <div class="md:w-1/2 overflow-hidden max-w-[467px] mx-auto md:order-1">
    <img class="w-full h-full object-cover mt-10 md:mt-0 rounded-xl ml-3" src="https://img.freepik.com/fotos-gratis/representacao-da-experiencia-do-utilizador-e-design-da-interface_23-2150169847.jpg?w=740&t=st=1711044065~exp=1711044665~hmac=25b28f2f121d20639aa8332752cdae28fcbfffbb0ae9768d961da2205d3c4b81" alt="Imagem de uma estrutura arquitetônica">
    </div>
    <div class="md:w-6/12 md:ml-20 md:order-2">
        <h1 class="text-3xl font-bold mb-4 text-left " style="color: #E1E1D4">Programa AMS</h1> 
        <p class="font-normal text-base mt-10 text-justify" style="color: #CDC0C0">As mentorias são parte integrantes das Atividades de Contextualização Profissional (ACP) que compõe uma carga de 200 horas de formação junto a empresa parceira, no caso a IBM, o que é pré-requisito para o ingresso no Ensino Superior na Fatec.</p>
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

    <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
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
  // Select all dropdown toggle buttons
  const dropdownToggles = document.querySelectorAll(".dropdown-toggle")

  dropdownToggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      // Find the next sibling element which is the dropdown menu
      const dropdownMenu = toggle.nextElementSibling

      // Toggle the 'hidden' class to show or hide the dropdown menu
      if (dropdownMenu.classList.contains("hidden")) {
        // Hide any open dropdown menus before showing the new one
        document.querySelectorAll(".dropdown-menu").forEach((menu) => {
          menu.classList.add("hidden")
        })

        dropdownMenu.classList.remove("hidden")
      } else {
        dropdownMenu.classList.add("hidden")
      }
    })
  })

  // Clicking outside of an open dropdown menu closes it
  window.addEventListener("click", function (e) {
    if (!e.target.matches(".dropdown-toggle")) {
      document.querySelectorAll(".dropdown-menu").forEach((menu) => {
        if (!menu.contains(e.target)) {
          menu.classList.add("hidden")
        }
      })
    }
  })
  
  // Mobile menu toggle
  
  const mobileMenuButton = document.querySelector('.mobile-menu-button')
  const mobileMenu = document.querySelector('.navigation-menu')
  
  mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden')
  })
  
  
})
</script>
</html>