<div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="Home"><span> Dashboard</span></a>
                        </li>
						<?php
						//show data in grideview
						$select = "select count(user_id) as A from user_tb";
						$a = $con->query($select);
						foreach($a as $userv);
						
						?>
						<li><a class="ajax-link" href="User"><span> User (<b><?php echo $userv['A'] ?></b>)</span></a>
                        </li>
						<?php
						//show data in grideview
						$select = "select count(flr_id) as B from floor_tb";
						$a = $con->query($select);
						foreach($a as $floorv);
						
						?>
						<li><a class="ajax-link" href="Floor"><span> Floor (<b><?php echo $floorv['B'] ?></b>)</span></a>
                        </li>
						<?php
						//show data in grideview
						$select = "select count(rate_id) as C from rate_tb";
						$a = $con->query($select);
						foreach($a as $ratev);
						
						?>
						<li><a class="ajax-link" href="Rate"><span> Rate (<b><?php echo $ratev['C'] ?></b>)</span></a>
                        </li>
						<?php
						//show data in grideview
						$select = "select count(book_id) as D from booking_tb";
						$a = $con->query($select);
						foreach($a as $bookv);
						
						?>
						<li><a class="ajax-link" href="Booking"><span> Booking (<b><?php echo $bookv['D'] ?></b>)</span></a>
                        </li>
						<?php
						//show data in grideview
						$select = "select count(book_id) as D from booking_tb";
						$a = $con->query($select);
						foreach($a as $bookv);
						
						?>
						<li><a class="ajax-link" href="Daily/Transactions"><span> Daily Transactions (<b><?php echo $bookv['D'] ?></b>)</span></a>
                        </li>
							
						
                </div>
            </div>
			
