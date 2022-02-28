<?php

/* Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo. */
/* 
$paragraph = 'Gli sfortunati sono soltanto un metro di riferimento. per i fortunati, tu sei sfortunato,. così io so di non esserlo, sfortunatamente. i fortunati riconoscono la fortuna solo quando la perdono. Prendi te stesso per esempio;. ieri stavi meglio di oggi, eppure ti ci voleva oggi per capirlo. Ma oggi è arrivato e ora è tardi. Hai visto?';

//# cit. Slevin Patto Criminale

$exploded = explode('.', $paragraph);

var_dump($exploded);

for ($i = 0; $i < count($exploded); $i++) {
    echo $exploded[$i] . '<br/>';
} */

//! esercitazione in classe - stesso esercizio ma con il FOREACH
$paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum sed recusandae, dolor magnam sint ut porro ipsam nemo assumenda dolores beatae nulla molestiae vero adipisci cumque! Tempora recusandae laborum aliquid.
Magnam doloribus deleniti officiis nam vero unde aliquid voluptatibus beatae quasi optio. Unde mollitia deserunt atque sed facere culpa non? Id exercitationem dolorum, minima sequi provident ad atque commodi blanditiis!
Debitis fuga incidunt ex placeat, eaque quos. Rem itaque veniam eius dolore sint, ullam, voluptates nesciunt qui quo ducimus quaerat odit soluta quae? Nesciunt, numquam dignissimos consequuntur doloribus in dolore?
Quia dolor quaerat eligendi possimus vitae autem cumque odio est saepe omnis consectetur dignissimos iusto, accusantium unde eveniet labore necessitatibus laudantium corporis placeat veniam fugit? Cumque recusandae ducimus maxime blanditiis?
Possimus, odit? Velit tempore, libero illum impedit necessitatibus optio cupiditate possimus omnis consequuntur fugiat excepturi nobis vitae fuga animi voluptas amet, porro sint! Itaque, amet natus. Adipisci et deleniti eaque?
Blanditiis ipsum ratione excepturi placeat ab. Placeat culpa maiores perspiciatis ex doloribus, explicabo corporis odio eaque officia quidem repellat enim similique esse distinctio numquam cumque! Aut fuga minus iusto et.
Quo voluptas magni rerum expedita fugit deserunt unde dolor assumenda optio soluta, impedit ipsa culpa minima nesciunt cupiditate est nisi neque aliquid modi consequuntur. Quos soluta illo ipsum cum quasi?
Quibusdam vitae autem aperiam soluta dolores vero, facilis odit dignissimos maxime excepturi provident sed error aliquam maiores placeat libero eum enim commodi ullam nisi. Impedit, suscipit repellendus. Veniam, delectus sit.
Hic, laudantium. Incidunt ratione consequuntur cum nam ullam blanditiis a ex voluptas aliquid sequi eum sed ad officia fugit magni, earum veniam enim rem architecto itaque possimus? Nemo, accusamus similique.
Eum labore sunt iure hic accusamus, eligendi vero saepe quas neque fugiat. Repudiandae voluptates, totam unde, temporibus fugit corrupti cum animi incidunt iure perferendis dicta enim iste laudantium optio quia?";

$exploded = explode('.', $paragraph);

foreach ($exploded as $key => $value) {
    echo $exploded[$key] . '<br/>';
}
