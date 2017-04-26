@extends('layouts.layout')
@section('content')
<body>
<h3>Basic grid</h3>
<p>The grid cells below do not specify any widths, they just naturally space themselves equally and expand to fit the entire row. They’re also equal height by default.</p>
	<div class="Container">		
		<div class="Grid Grid--gutters u-textCenter">
  <div class="Grid-cell">
    <div class="Demo">1/2</div>
  </div>
  <div class="Grid-cell">
    <div class="Demo">1/2</div>
  </div>
</div>
<div class="Grid Grid--gutters u-textCenter">
  <div class="Grid-cell">
    <div class="Demo">1/3</div>
  </div>
  <div class="Grid-cell">
    <div class="Demo">1/3</div>
  </div>
  <div class="Grid-cell">
    <div class="Demo">1/3</div>
  </div>
</div>
<div class="Grid Grid--gutters u-textCenter">
  <div class="Grid-cell">
    <div class="Demo">1/4</div>
  </div>
  <div class="Grid-cell">
    <div class="Demo">1/4</div>
  </div>
  <div class="Grid-cell">
    <div class="Demo">1/4</div>
  </div>
  <div class="Grid-cell">
    <div class="Demo">1/4</div>
  </div>
</div>
<div class="Grid Grid--gutters Grid--flexCells">
  <div class="Grid-cell">
    <div class="Demo">
      Full-height, even when my content doesn't fill the space.
    </div>
  </div>
  <div class="Grid-cell">
    <div class="Demo">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis velit non gravida venenatis. Praesent consequat lectus purus, ut scelerisque velit condimentum eu. Maecenas sagittis ante ut turpis varius interdum. Quisque tellus ipsum, eleifend non ipsum id, suscipit ultricies neque.
    </div>
  </div>
</div>


<h3>Bottom-aligned Grid Cells</h3>
<div class="Grid Grid--gutters Grid--bottom">
  <div class="Grid-cell">
    <div class="Demo">
      This cell should be bottom-aligned.
    </div>
  </div>
  <div class="Grid-cell">
    <div class="Demo">
      Curabitur pulvinar dolor lectus, quis porta turpis ullamcorper nec. Quisque eget varius turpis, quis iaculis nibh. Ut interdum ligula id metus hendrerit cursus. Integer eu leo felis. Aenean commodo ultrices nunc, sit amet blandit elit gravida in.
    </div>
  </div>
  <div class="Grid-cell">
    <div class="Demo">
      This cell should be bottom-aligned.
    </div>
  </div>
</div>
	</div>
</body>
@stop