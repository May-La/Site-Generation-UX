<?php $pageTitle = "Utilisabilite"; ?>

<?php require_once '../includes/head.php'; ?>
<?php require_once '../includes/navbar.php'; ?>
<body>
    <br>
    <h2></h2>
    <br>
    <p>
        La majorité des échelles d’utilisabilité sont génériques et conviennent à tous types de systèmes (numérique ou non ) et ont pour objectif d’évaluer l'utilisabilité d’un produit ou système. L’utilisabilité ( de l’anglais usability) est « le degré selon lequel un produit peut être utilisé, par des utilisateurs identifiés, pour atteindre des buts définis avec efficacité, efficience et satisfaction, dans un contexte d’utilisation spécifié » selon la norme ISO 9241-11. Ces échelles sont donc utiles lors de l’étude des interactions hommes-systemes.
        <br>
        Il est recommandé de  toujours garder l'échelle telle qu’elle à été conçue pour préserver la qualité psychométrique . La  psychométrie est la  science de la mesure des caractéristiques psychologiques des individus. Elle se consacre aux tests, à leur construction et à leur utilisation.
    </p>
    <br>
    <hr ALIGN=CENTER WIDTH="50%"> 
    <br>
    <h2 id = "$2">Exemples d’échelles d’utilisabilité</h2> 
    <br>
    <p>Dans cette partie nous allons présenter différents exemples d’échelles d’utilisabilité afin de voir les problèmes et adaptations possibles.</p>
    <h3 id = "$2.1">I. SUS</h3>
    <br>
    <p>
        L’échelle SUS une des échelles les plus célèbres et les plus utilisées par les professionnels  de l’UX. C'est l'une des premières échelles de mesure de l’utilisabilité perçue créée en 1986 par John Brooke.
        <br>
        L'objectif de cette échelle est “quick and dirty” c’est à dire  rapide à remplir et facile à comprendre. (Gronier, 1995) 
        <br>
        L’échelle présente 10 items présentés sous la forme affirmative , un sur deux est inversé ce qui permet une vérification de l’accord ou non de l’utilisateur. 
        L’utilisateur indique s’il est d’accord avec l'affirmation sur une échelle allant de pas du tout d’accord a tout à fait d’accord (voir figure 1 ci dessous) <a href = "">(Échelle complète ici)</a>.
        <br>
        L’échelle SUS à été traduite en français en 2015 après de nombreuses difficultés de traduction notamment sur les nuances et cette traduction à été ensuite validée ( Gronier, 2021).
    </p>
    <div class = "text-center">
        <img src = "../IMG/ExtraitUEQ.png" id = "Fig1" alt = "Echelle SUS" WIDTH="50%">
        <br>
        <br>
        <h5>Figure 1. Echelle SUS</h5>
    </div>
    <p>Méthode de calcul:</p>
    <ul>
        <li>Pour chaque question paire :  soustraire le score par rapport à 5 (si l’utilisateur a coché la case 2 le score attribué à cette question est donc de 3 )</li>
        <li>Pour chaque question impaire : enlever 1 au score ( si l’utilisateur a coché la case 2 le score attribué à cette question est de 1)</li>
    </ul>
    <p>
        Pour le score final du test il suffit d'additionner tous les scores de chaque question afin d’arriver à un score sur 100. Ce score n’est pas un pourcentage mais une indication de l’utilisabilité du système et est utile comme outil de comparaison. De plus, il est possible d’avoir une lecture de ce score grâce à des recherches plus récentes  (Bangor , 2009) établissant une échelle de lecture du score sur 100 pour essayer de lui donner une certaine objectivité ( voir figure 2 ci-dessous). On peut alors placer le score sur une échelle allant de “fair” (acceptable) à “best imaginable” (le mieux imaginable).
    </p>
    <div class = "text-center">
        <img src = "../IMG/ExtraitUEQ.png" id = "Fig2" alt = "Lecture du résultat SUS" WIDTH="50%">
        <br>
        <br>
        <h5>Figure 2. Lecture du résultat SUS</h5>
    </div>
    <p>
        De plus il existe une version plus courte de l’échelle SUS appelée UMUX  (Usability Metric for User Experience) développée par  Kraig Finstad en 2010 qui ne comporte que 4 questions et une version encore plus courte (UMUX-lite) avec uniquement 2 questions (les questions inversées ont été supprimées).
    </p>
    <br>
    <hr ALIGN=CENTER WIDTH="20%"> 
    <br>
    <h3 id = "$2.2">II. DEEP</h3>
    <br>
    <p>
        L’échelle DEEP a été développée en 2012 par Yang, Linder & Bolchini afin de de proposer des recommandations de conception et non uniquement l’évaluation du système comme le faisaient les autres échelles à l’époque . Selon les auteurs, les échelles existantes ne détectent que les problèmes d'utilisabilité superficiels et non les causes profondes de ces problèmes .Le DEEP à donc deux ambitions :
    </p>
    <ul>
        <li>mesurer la manifestation de l'expérience utilisateur (= “phénotype de l’utilisabilité”)</li>
        <li>mesurer ce qui est à l'origine du problème dans l’interface (=”génotype de l’utilisabilité”)</li>
    </ul>
    <p>L’échelle est constituée de 19 items sous forme de phrases affirmatives réparties en 6 catégories : </p>
    <ul>
        <li>Contenu perçu</li>
        <li>Structure perçue et architecture de l’information </li>
        <li>Navigation perçue</li>
        <li>Effort cognitif perçu</li>
        <li>Cohérence de la mise en place perçue </li>
        <li>Guidage visuel perçu</li>
    </ul>
    <p>Pour chaque affirmation l’individu indique son accord (ou non ) avec l’affirmation sur une échelle de 1 à 5 allant de “Pas du tout d’accord”(1) à “Tout à fait d’accord”(5), de plus il à l'option de signaler que l'affirmation n’est  “pas applicable” comme nous pouvons le voir sur la figure 3 ci dessous. <a href = "">(Echelle complète ici)</a></p>
    <div class = "text-center">
        <img src = "../IMG/ExtraitUEQ.png" id = "Fig3" alt = "Extrait d’une des 6 catégories de l'échelle DEEP" WIDTH="50%">
        <br>
        <br>
        <h5>Figure 3. Extrait d’une des 6 catégories de l'échelle DEEP</h5>
    </div>
    <br>
    <hr ALIGN=CENTER WIDTH="20%"> 
    <br>
    <h3 id = "$2.3">III. CSUQ</h3>
    <br>
    <p>
        L’échelle CSUQ “ Computer System Usability Questionnaires” à été développée par James Lewis en 1995  en tant qu’application plus générique du PSSUQ “Post Study System Usability Questionnaire” ( Lewis , 1992) . Ces deux échelles ont été développées dans le cadre de travaux internes d’IBM. La différence est dans le temps utilisé pour formuler les affirmations : les affirmations du PSSUQ sont au passé et celles du CSUQ sont au présent. L’échelle à été traduite en français par Gronnier et Johanssen (2022).
        <br>
        Le CSUQ se présente sous deux formes : une version originale à 19 items, et une version courte à 16 items qui est désormais la plus usuelle (les items 3, 5 et 13 sont supprimés de la version longue). Les réponses se présentent sur une échelle Likert à 7 points comme nous pouvons l’observer sur la figure 4 ci-dessous. <a href = "">(Echelle complète ici)</a>
    </p>
    <div class = "text-center">
        <img src = "../IMG/ExtraitUEQ.png" id = "Fig4" alt = "Extrait du CSUQ" WIDTH="50%">
        <br>
        <br>
        <h5>Figure 4. Extrait du CSUQ</h5>
    </div>
    <p>Il y a différents scores issus du CSUQ :</p>
    <ul>
        <li>un score global qui réunit tous les items</li>
        <li>un score sur l’utilité du système qui réunit les items 1 à 8</li>
        <li>un score sur la qualité de l'information qui réunit les items 9 à 15</li>
        <li>un score sur la qualité de l’interface qui réunit les items de 16 à 18.</li>
        <li>un score sur la satisfaction générale avec uniquement l’item 19</li>
    </ul>
    <p>Il est donc possible de comparer dans le temps les différents scores (Lewis, 2002) notamment pendant l’élaboration du système afin d’avoir une vue globale de ces capacitées (voir figure 5 ci dessous)</p>
    <div class = "text-center">
        <img src = "../IMG/ExtraitUEQ.png" id = "Fig5" alt = "Exemple d’analyse du CSUQ" WIDTH="50%">
        <br>
        <br>
        <h5>Figure 5. Exemple d’analyse du CSUQ</h5>
    </div>
    <br>
    <hr ALIGN=CENTER WIDTH="50%"> 
    <br>
    <h2 id = "$3">Synthèse</h2>
    <br>
    <p>
        Ces échelles sont donc très pratiques pour évaluer l’utilisabilité d’un système et surtout pour pouvoir comparer les résultats au cours du temps ou au cours du développement du produit ou système. 
        Ces échelles ne sont pas très longues et permettent d’avoir des résultats divers comme par exemple l’échelle CSUQ qui permet d’avoir différents scores ce qui donne une idée très complète des améliorations à faire sur le produit.
        <br>
        Cependant ces échelles ont été conçues pour des adultes et non des enfants. Il semble donc important de noter les possibles problèmes de ces échelles pour des enfants et les possibles solutions et adaptations.
    </p>
    <p>
        Selon Bell ( 2007) il est possible d'adapter des questionnaires a des enfants cependant il faut prendre de nombreuses précautions et il est nécessaire de faire attention à l'influence que les adultes peuvent avoir sur les réponses des enfants . Par exemple, un enfant peut avoir l’impression que l’adulte connaît les “ bonnes réponses” et donc de répondre au questionnaire dans l’optique de lui faire plaisir. c’est une forme de soumission à l’autorité.
        <br>
        Certaines affirmations peuvent ne pas êtres comprises par les enfants dû à la complexité du vocabulaire ou à la difficulté à comprendre les nuances. Il est notamment recommandé ( De leeuw et al. , 2004) d’éviter l’utilisation de questions hypothétiques ou des questions à double visées ( 2 questions en une) .De plus il est recommandé d’éviter les questions sous forme négative ( Borgers et al, 2000) ce qui s’oppose aux échelles traditionnelles qui alternent affirmations positives et affirmations négatives.
        <br>
        Une échelle de 1 à 5 peut être trop abstraite pour les enfants, il faudrait peut être une échelle plus explicite. De plus,  il est nécessaire de limiter le nombre d’options lors d’une question à  choix multiple car il peut être difficile pour les enfants de reconnaître les nuances entre les options (Borgers et Hox, 2000) . Selon Borgers, Hox et Leeuw ( 2001) a partir de 11 ans les enfants sont capables de prendre en compte jusqu'à 4 ou 5 réponses. En dessous de 11 ans il est recommandé d’uniquement utiliser des réponses binaires OUI/NON.
    </p>
    <br>
    <a href = "EDLA.php">Retour au sommaire</a>
</body>
<?php require_once '../includes/footer.php' ?>
</html>