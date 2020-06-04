<?php

include_once 'app/WriterEntries.inc.php';
?>
@include('partials.beginPage')
@include('partials.navbar')

<div class="container">
    <div class="jumbotron">
        <h1>{{  }}</h1>
        <p>
            {{  }}
        </p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Search
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <form class="form-inline" action="{{ URL_SEARCH }}" method='GET'>
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search ..." aria-label="Search" name="q">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <?php
            WriterEntries::writeEntry();
            ?>
        </div>
    </div>
</div>
@include('partials.endPage')