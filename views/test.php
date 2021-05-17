<?php  require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/libary.html"; ?>

<ul class="nav nav-pills nav-justified">
  <li class="nav-item nav-link active"><a data-toggle="tab" href="#Show1">Show1</a></li>
  <li class="nav-item nav-link"><a data-toggle="tab" href="#Show2">Show2</a></li>
  <li class="nav-item nav-link"><a data-toggle="tab" href="#Show3">Show3</a></li>
</ul>

<div class="tab-content">
  <div id="Show1" class="tab-pane fade in active">
    <form action="test">
      <input type="text" name="OnlyMe"/>
    </form>
  </div>

  <div id="Show2" class="tab-pane fade">
    <form action="differentTest">
      <input type="text" name="MeAnd23Submit"/>        
      <input type="text" name="23"/>
      <input type="submit" value="submit"/>
    </form>
  </div>

  <div id="Show3" class="tab-pane fade">
    <form action="differentTest">
      <input type="text" name="MeAnd23Submit2"/>    
      <input type="text" name="23"/>
      <input type="submit" value="submit"/>
    </form>
  </div>
</div>