<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$key = '99f2ec4ae6ef04d3109fed0349964c12055dd14d';

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="row">
        <div id="result">
            <div data-is="analyze">
                <div class="container">
                    <div class="titlebar" style="padding: 0;">
                        <div data-is="analyze_endpoints">
                            <div data-is="content_type">
                                <div data-is="url" data-does="user" class="analyze-btn selected">
                                    <div class="label">Enter your own URL</div>
                                    <div class="description">click to clear URL field</div>
                                </div>
                                <div data-is="text" data-does="user" class="analyze-btn">
                                    <div class="label">Enter your own text</div>
                                    <div class="description">click to clear text field</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-is="content_form">
                        <div data-is="content_source"><input type="text" data-does="url" placeholder="Enter URL here..."
                                                             style="display: none;"><textarea data-does="text"
                                                                                              style="display: inline-block;"
                                                                                              placeholder="Enter text here..."></textarea>

                            <div class="api_key_area" style="display: block;"><input name="apikeyField" type="text"
                                                                                     data-is="api_key_field" value=""
                                                                                     placeholder="Enter your API key here..."
                                                                                     style="display:none;">
                            </div>
                        </div>
                        <div class="buttons">
                            <div class="btn cta" data-is="submit">Try it</div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-is="results">
                <div class="container">
                    <div class="titlebar">
                        <div data-is="results_title" class="a">
                        </div>
                        <div data-is="results_formats"><span data-is="Visual" class="btn selected">Visual</span><span
                                data-is="JSON" class="btn ">JSON</span><span data-is="API" class="btn ">API</span></div>
                    </div>
                    <div data-is="endpoints">
                        <div data-is="entities" class="endpoint active">Entities</div>
                        <div data-is="keywords" class="endpoint">Keywords</div>
                        <div data-is="category" class="endpoint">Taxonomy</div>
                        <div data-is="concepts" class="endpoint">Concepts</div>
                        <div data-is="sentiment" class="endpoint">Document Sentiment</div>
                        <div data-is="sentiment_targeted" class="endpoint">Targeted Sentiment</div>
                        <div data-is="relations" class="endpoint">Relations</div>
                        <div data-is="language" class="endpoint">Language</div>
                        <div data-is="title" class="endpoint">Title</div>
                        <div data-is="author" class="endpoint">Author</div>
                        <div data-is="text" class="endpoint">Text</div>
                        <div data-is="feeds" class="endpoint">Feeds</div>
                        <div data-is="microformats" class="endpoint">Microformats</div>
                    </div>
                    <div data-is="endpoint_details">
                        <div data-is="entities_detail" class="endpoint_detail active"><img src="../../web/images/spinner_16.gif"
                                                                                           style="position:relative;top:3px;margin-right:5px;">Loading
                            Entities...
                        </div>
                        <div data-is="keywords_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                    style="position:relative;top:3px;margin-right:5px;">Loading
                            Keywords...
                        </div>
                        <div data-is="category_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                    style="position:relative;top:3px;margin-right:5px;">Loading
                            Taxonomy...
                        </div>
                        <div data-is="concepts_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                    style="position:relative;top:3px;margin-right:5px;">Loading
                            Concepts...
                        </div>
                        <div data-is="sentiment_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                     style="position:relative;top:3px;margin-right:5px;">Loading
                            Document Sentiment...
                        </div>
                        <div data-is="sentiment_targeted_detail" class="endpoint_detail"><img
                                src="../../web/images/spinner_16.gif" style="position:relative;top:3px;margin-right:5px;">Loading
                            Targeted Sentiment...
                        </div>
                        <div data-is="relations_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                     style="position:relative;top:3px;margin-right:5px;">Loading
                            Relations...
                        </div>
                        <div data-is="language_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                    style="position:relative;top:3px;margin-right:5px;">Loading
                            Language...
                        </div>
                        <div data-is="title_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                 style="position:relative;top:3px;margin-right:5px;">Loading
                            Title...
                        </div>
                        <div data-is="author_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                  style="position:relative;top:3px;margin-right:5px;">Loading
                            Author...
                        </div>
                        <div data-is="text_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                style="position:relative;top:3px;margin-right:5px;">Loading
                            Text...
                        </div>
                        <div data-is="feeds_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                 style="position:relative;top:3px;margin-right:5px;">Loading
                            Feeds...
                        </div>
                        <div data-is="microformats_detail" class="endpoint_detail"><img src="../../web/images/spinner_16.gif"
                                                                                        style="position:relative;top:3px;margin-right:5px;">Loading
                            Microformats...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

