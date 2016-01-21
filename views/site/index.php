<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="row">
        <div class="col-sm-12">
            <h1>Essay Tools</h1>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Morbi eget enim at arcu laoreet bibendum. Mauris eleifend augue et arcu cursus, ut aliquet dui
                imperdiet.
                Aliquam tortor augue, pulvinar eu nulla a, aliquam vulputate mauris.
                Curabitur mollis fringilla eros, et gravida mauris posuere sit amet.
                Nulla et justo a orci sodales volutpat in eu neque. Donec dictum tempor dolor quis pellentesque.
                Donec mollis sed enim ac egestas. Donec sit amet metus euismod, fermentum mi non, ornare est.
                Donec a neque eget libero ullamcorper mattis quis sit amet urna. Mauris blandit est id interdum
                placerat.
                Aliquam pellentesque consectetur consectetur. Aenean blandit orci eget ipsum eleifend, sit amet
                scelerisque elit aliquet.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 col-sm-offset-0">
            <h2>Essay Topics Generator</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Morbi eget enim at arcu laoreet bibendum. Mauris eleifend augue et arcu cursus, ut aliquet dui
                imperdiet.
            </p>
            <p>
                <?= Html::a('Go to essay topic generator', ['/site/essaytopic'], ['class'=>'btn btn-primary']) ?>
            </p>
        </div>
        <div class="col-sm-5 col-sm-offset-0">
            <ul>
                <li><a href="#">Topics</a></li>
                <li><a href="#">Topics</a></li>
                <li><a href="#">Topics</a></li>
                <li><a href="#">Topics</a></li>
                <li><a href="#">Topics</a></li>
                <li><a href="#">Topics</a></li>
                <li><a href="#">Topics</a></li>
                <li><a href="#">Topics</a></li>
                <li><a href="#">Topics</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <h2>Essay Analyzer</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Morbi eget enim at arcu laoreet bibendum. Mauris eleifend augue et arcu cursus, ut aliquet dui
                imperdiet.
            </p>
            <p>
                <?= Html::a('Go to essay analyzer', ['/site/essayanalyzer'], ['class'=>'btn btn-primary']) ?>
            </p>
        </div>
        <div class="col-sm-5">
            <h2>Essay Summerizer</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Morbi eget enim at arcu laoreet bibendum. Mauris eleifend augue et arcu cursus, ut aliquet dui
                imperdiet.
            </p>
            <p>
                <?= Html::a('Go to essay summerizer', ['/site/essaysummerizer'], ['class'=>'btn btn-primary']) ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <h2>Essay Mapper</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Morbi eget enim at arcu laoreet bibendum. Mauris eleifend augue et arcu cursus, ut aliquet dui
                imperdiet.
            </p>
            <p>
                <?= Html::a('Go to essay mapper', ['/site/essaymapper'], ['class'=>'btn btn-primary']) ?>
            </p>
        </div>
        <div class="col-sm-6">
            <h2>Paraphrasing Tool</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Morbi eget enim at arcu laoreet bibendum. Mauris eleifend augue et arcu cursus, ut aliquet dui
                imperdiet.
            </p>
            <p>
                <?= Html::a('Go to paraphrasing tool', ['/site/essayparaphrasing'], ['class'=>'btn btn-primary']) ?>
            </p>
        </div>
    </div><!-- /.row -->
    <div class="row">
    </div>
</div>

