<!DOCTYPE html>
<html lang="en">
<?php include 'intro-liens.php'; ?>

    <div class="container-fluid">
        <!-- NAVBAR -->
        <?php include 'nav.php'; ?>
            <header id="startchange" class="container-fluid header page">
                <h1>ANAGRAMME EN JS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti mollitia, aperiam ad, placeat at eaque sequi voluptatem tempore unde ipsum, atque, soluta quidem doloremque quia tempora! Facere corporis facilis veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio tempora eum accusantium totam doloremque similique officia veritatis ipsa! Vitae illo tempore molestiae adipisci, quos quasi facere eaque blanditiis sequi.</p>
                <div class="separator-header2"></div>
            </header>
            <!-- PROJET -->
            <img class="img-responsive col-md-8 col-md-offset-2" src="img/img-11.png" alt="">
            <pre class="col-md-offset-2 col-md-8">
                    <code class="col-md-10 col-md-offset-1 col-xs-10">                                    
                    
/* ==================== */
/* ======= JS ========= */
/* ==================== */
                    
'use strict';

function Anagram(word) {
    this.word = word;
    this.mot = this.trier(this.word);
}

Anagram.prototype.trier = function (trie) {
    var motAlpha = trie.toLowerCase().split("").sort().join("");
    return motAlpha;
}

Anagram.prototype.matches = function (words) {

    if (typeof words == "string") {
        words = arguments;
    }

    var matches = [];
    var i = 0;

    for (i; i < words.length; i++) {
        if (words[i].toLowerCase() != this.word.toLowerCase()) {
            if (this.trier(words[i]) === this.mot) {
                matches.push(words[i]);
            }
        }
    }

    return matches;
}

                    </code>
                </pre>
    </div>
    <a href="quizz.php">
        <i class="fa fa-chevron-left fa-2x col-md-6 col-sm-6 col-xs-6" aria-hidden="true"></i></a>
    <a href="poneyclicker.php">
        <i class="fa fa-chevron-right fa-2x col-md-6 col-sm-6 col-xs-6" aria-hidden="true"></i></a>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
        </div>
        </body>

</html>