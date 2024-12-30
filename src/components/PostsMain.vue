<script setup>
import PostArticle from './PostArticle.vue';
import { onMounted, ref } from 'vue';

const posts = ref([
  {
    "id": 24,
    "title": "Como a Realidade Virtual Está Transformando a Indústria do Entretenimento",
    "short_description": "A realidade virtual (VR) tem ganhado destaque como uma nova forma de consumo de entretenimento. Como ela está moldando a indústria e as experiências dos usuários?",
    "content": "A realidade virtual (VR) se tornou uma das tecnologias mais revolucionárias dos últimos tempos, e seu impacto na indústria do entretenimento tem sido significativo. Jogos, filmes, shows e experiências imersivas estão sendo reinventados por meio da VR. Nos videogames, por exemplo, a VR oferece uma experiência de jogo mais imersiva e realista, onde os jogadores podem interagir com os mundos virtuais como nunca antes. Filmes e shows ao vivo também estão se adaptando à realidade virtual, permitindo que os espectadores tenham uma experiência única e imersiva, como se estivessem realmente dentro da história ou do evento. Além disso, a VR está começando a ser usada para treinamento de profissionais em áreas como medicina e aviação, proporcionando simulações realistas e seguras para a prática de habilidades complexas. As possibilidades para a realidade virtual são infinitas e, com o avanço da tecnologia, podemos esperar ainda mais inovações que transformarão a maneira como consumimos e interagimos com o entretenimento. Neste post, vamos explorar como a VR está moldando a indústria do entretenimento e o que podemos esperar para o futuro dessa tecnologia.",
    "date": "2024-12-24 17:46:39"
  },
  {
    "id": 23,
    "title": "A Importância da Saúde Mental no Ambiente de Trabalho",
    "short_description": "Com a crescente pressão e exigências do ambiente de trabalho moderno, a saúde mental dos colaboradores nunca foi tão importante. Como as empresas podem cuidar do bem-estar psicológico de seus funcionários?",
    "content": "A saúde mental tem se tornado uma preocupação crescente no ambiente de trabalho. Com a intensificação das demandas profissionais, os avanços tecnológicos que geram maior conectividade e a pressão por resultados cada vez mais rápidos, muitos trabalhadores têm enfrentado sérios problemas relacionados à saúde mental, como estresse, ansiedade e até mesmo depressão. As empresas precisam compreender que um colaborador com problemas de saúde mental é um colaborador menos produtivo, e que cuidar do bem-estar psicológico dos seus funcionários deve ser uma prioridade. Investir em programas de apoio psicológico, promover o equilíbrio entre vida pessoal e profissional, reduzir a pressão por metas inatingíveis e criar um ambiente de trabalho acolhedor são algumas das estratégias que podem ser adotadas. Além disso, os líderes de empresas precisam ser treinados para reconhecer sinais de problemas de saúde mental e saber como lidar com os funcionários que enfrentam esses desafios. A cultura organizacional também desempenha um papel importante, pois um ambiente de trabalho saudável pode contribuir significativamente para a redução do estresse e o aumento da produtividade. Este post discute a importância de priorizar a saúde mental no ambiente de trabalho e oferece sugestões de como as empresas podem promover um local de trabalho mais saudável e equilibrado para todos.",
    "date": "2024-12-24 16:46:39"
  },
  {
    "id": 20,
    "title": "Como a Internet das Coisas Está Transformando o Mundo",
    "short_description": "A Internet das Coisas (IoT) está cada vez mais presente no nosso cotidiano, conectando dispositivos e criando novas possibilidades para a vida cotidiana.",
    "content": "Nos últimos anos, a Internet das Coisas (IoT) emergiu como uma das inovações mais promissoras no campo da tecnologia. IoT é a rede de dispositivos físicos que se conectam à internet, permitindo a troca de dados entre eles e, assim, facilitando a automação e a melhoria da eficiência em diversas áreas. Por exemplo, nas casas inteligentes, onde dispositivos como termostatos, câmeras de segurança e até mesmo eletrodomésticos se conectam à internet e podem ser controlados remotamente. No setor industrial, o IoT está transformando fábricas e processos produtivos com sensores que monitoram as condições das máquinas em tempo real, prevenindo falhas e otimizando a produção. As possibilidades da IoT são vastas e podem ter um impacto significativo na maneira como interagimos com o mundo, seja em nossa vida pessoal ou em nossas atividades profissionais. Este post vai explorar as diferentes aplicações da Internet das Coisas e como ela pode moldar o futuro.",
    "date": "2024-12-24 15:46:39"
  },
  {
    "id": 21,
    "title": "O Desafio da Sustentabilidade no Mundo Moderno",
    "short_description": "Com a crescente preocupação ambiental, a sustentabilidade se tornou um tema central nas discussões globais. Como podemos conciliar desenvolvimento e preservação do meio ambiente?",
    "content": "A sustentabilidade nunca foi tão importante quanto nos dias atuais. Com o aumento da população mundial, o consumo desenfreado e a degradação ambiental, temos um cenário cada vez mais crítico. As mudanças climáticas estão afetando diretamente a vida no planeta, com eventos climáticos extremos como tempestades, secas e inundações se tornando mais frequentes. A preservação dos recursos naturais e a redução dos impactos ambientais são prioridades, mas isso exige mudanças significativas nos sistemas de produção, no consumo e nas políticas públicas. Empresas, governos e cidadãos têm um papel fundamental nesse processo. A implementação de tecnologias sustentáveis, como energias renováveis, sistemas de reciclagem eficientes e a redução do desperdício, são algumas das medidas necessárias. A consciência ambiental e a busca por alternativas sustentáveis devem ser fomentadas em todos os níveis da sociedade, de maneira que possamos deixar um mundo melhor para as próximas gerações. Este post detalha os desafios da sustentabilidade e as práticas que podem ajudar a garantir um futuro mais verde e saudável para todos.",
    "date": "2024-12-24 15:46:39"
  },
])
</script>

<template>
  <section class="posts-section">
    <PostArticle 
      v-for="post in posts"
      :key="post.id"
      :id="post.id"
      :title="post.title"
      :description="post.short_description"
      :date="post.date"
    />
  </section>
</template>

<style scoped>
  .posts-section {
    display: grid;
    justify-items: center;
    gap: 15px;

    grid-template-columns: repeat(auto-fill, minmax(475px, 1fr));
  }

  @media (max-width: 650px) {
    .posts-section {
      grid-template-columns: 1fr;
    }
  }
</style>