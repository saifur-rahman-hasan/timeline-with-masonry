<?php
	
	$posts_data	=	[

		[
			'post_id'		=>	123,
			'post_title'	=>	'Post title 1',
			'post_content'	=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, libero, ab. Quae voluptatum ea voluptas! Culpa ea fugit, sint aliquam magnam numquam fugiat obcaecati earum. Quis inventore, dolorum eos ullam.',
			'user_id'		=>	42212,
			'user_name'		=>	'Saifur Rahman Hasan',
		],

		[
			'post_id'		=>	321,
			'post_title'	=>	'Post title 2',
			'post_content'	=>	' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, eaque molestiae. Tenetur, maxime et cumque numquam nobis dolor, dolorem veniam nam aut eligendi perspiciatis exercitationem enim deserunt perferendis, dolore aperiam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, libero, ab. Quae voluptatum ea voluptas! Culpa ea fugit, sint aliquam magnam numquam fugiat obcaecati earum. Quis inventore, dolorum eos ullam.',
			'user_id'		=>	56422,
			'user_name'		=>	'Ibnul Quyum Imran',
		],

		[
			'post_id'		=>	1933,
			'post_title'	=>	'Post title 3',
			'post_content'	=>	'aliquam magnam numquam fugiat obcaecati earum. Quis inventore, dolorum eos ullam.',
			'user_id'		=>	42212,
			'user_name'		=>	'Ali Ehsan',
		],

		[
			'post_id'		=>	12223,
			'post_title'	=>	'Post title 4',
			'post_content'	=>	'Quae voluptatum ea voluptas! Culpa ea fugit, sint aliquam magnam numquam. Quis inventore, dolorum eos ullam.',
			'user_id'		=>	654212,
			'user_name'		=>	'Rezwana Sultana Nitu',
		],

		[
			'post_id'		=>	2321,
			'post_title'	=>	'Post title 5',
			'post_content'	=>	' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, eaque molestiae. Tenetur, maxime et cumque numquam nobis dolor, dolorem veniam nam aut eligendi perspiciatis exercitationem enim deserunt perferendis, dolore aperiam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, libero, ab. Quae voluptatum ea voluptas! Culpa ea fugit, sint aliquam magnam numquam fugiat obcaecati earum. Quis inventore, dolorum eos ullam.',
			'user_id'		=>	67422,
			'user_name'		=>	'Myn Uddin Emu',
		]

	];


	foreach($posts_data as $post):
		echo '
			<li class="timeline-grid-item grid-item-width-1-2">
				
				<div class="timeline-block clearfix">
					
					<div class="timeline-icon" data-toggle="tooltip" title="photo post / sentiment">
						<i class="fa fa-lg fa-home"></i>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							'. $post['user_name'] .'
						</div>
						<div class="panel-body">
							<div class="panel-inner">
								<h4>'. $post['post_title'] .'</h4>
								<p>'. $post['post_content'] .'</p>
							</div>
						</div>
						<div class="panel-footer">
							<div class="btn-group">
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Reactions"><i class="fa fa-user"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Comments"><i class="fa fa-lg fa-comment"></i></button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" title="Shares"><i class="fa fa-lg fa-share"></i></button>
							</div>
						</div>
					</div>					

				</div>

			</li>
		';
	endforeach;