				<div id="bottom-footer">
					<div class="grid-x cf padded mob-cent-left">
						<div class="source-org copyright cell medium-6 cf">&copy; <?php
							$copyYear = 2014;
							$curYear = date('Y');
							echo $copyYear . (($copyYear !=$curYear) ? '-' . $curYear : ' ');
							?> <?php bloginfo('name'); ?>. All Rights Reserved<br>
						</div>
						<div class="mob-cent-right cell medium-6 last-col">
							Theme Design By:
								<span class="pinkfish-font">
									<a href="http://www.thinkpinkfish.com" target="_blank">Pink Fish Marketing</a>
								</span>
						</div>
					</div>
				</div>
