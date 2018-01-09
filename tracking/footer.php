            <div class="row">
            	<p align="center">
            		<a href="../index.html">Back to homepage</a>
					<?php if (isset($_SESSION['username'])): ?>
            			- <a href="logout.php">Logout (<?php echo $_SESSION['username']; ?>)</a>
					<?php endif; ?>
            	</p>
                <p align="center">© 2017 - All Rights Reserved. Designed by Inyavic Sage.</p>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>