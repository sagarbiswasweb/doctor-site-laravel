{{-- <!-- FOOTER -->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 text-center">
                            Powered by <a href="https://gatewayautomations.com" target="_blank">Gateway Automation Ltd</a> | <i class="fa-brands fa-whatsapp" style="color: #128C7E "></i>+8801324258751
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER CLOSED --> --}}

        </div>
        <!-- page -->

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

        <!-- JQUERY JS (SINGLE VERSION - LOAD FIRST) -->
        <script src="{{ asset('') }}backend/assets/plugins/jquery/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('') }}backend/assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="{{ asset('') }}backend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- SIDE-MENU JS -->
        <script src="{{ asset('') }}backend/assets/plugins/sidemenu/sidemenu.js"></script>

        <!-- SELECT2 JS (BEFORE OTHER PLUGINS) -->
        <script src="{{ asset('') }}backend/assets/plugins/select2/select2.full.min.js"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="{{ asset('') }}backend/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
        <script>
            // Initialize PerfectScrollbar safely
            document.addEventListener('DOMContentLoaded', function() {
                const sidebarContent = document.querySelector('.sidebar-content');
                if (sidebarContent) {
                    new PerfectScrollbar(sidebarContent);
                }
            });
        </script>

        <!-- STICKY JS -->
        <script src="{{ asset('') }}backend/assets/js/sticky.js"></script>

        <!-- CHART.JS -->
        <script src="{{ asset('') }}backend/assets/plugins/chart/Chart.bundle.js"></script>

        <!-- CHART-CIRCLE JS-->
        <script src="{{ asset('') }}backend/assets/plugins/circle-progress/circle-progress.min.js"></script>

        <!-- INTERNAL DATA-TABLES JS-->
        <script src="{{ asset('') }}backend/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('') }}backend/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
        <script src="{{ asset('') }}backend/assets/plugins/datatable/dataTables.responsive.min.js"></script>

        <!-- INDEX JS -->
        <script src="{{ asset('') }}backend/assets/js/index1.js"></script>
        <script src="{{ asset('') }}backend/assets/js/index.js"></script>

        <!-- Reply JS-->
		<script src="{{ asset('') }}backend/assets/js/reply.js"></script>

        <!-- CUSTOM JS -->
        <script src="{{ asset('') }}backend/assets/js/custom.js"></script>

        <!-- SWITCHER JS -->
        <script src="{{ asset('') }}backend/assets/switcher/js/switcher.js"></script>

        <!-- COLOR THEME JS -->
        <script src="{{ asset('') }}backend/assets/js/themeColors.js"></script>

        <!-- Summernote JS -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>

        <!-- WYSIWYG Editor JS -->
		<script src="{{ asset('') }}backend/assets/plugins/wysiwyag/jquery.richtext.js"></script>
		<script src="{{ asset('') }}backend/assets/plugins/wysiwyag/wysiwyag.js"></script>

        <!-- DATA TABLE JS (DATATABLE BUTTONS) -->
		<script src="{{ asset('') }}backend/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="{{ asset('') }}backend/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
		<script src="{{ asset('') }}backend/assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="{{ asset('') }}backend/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
		<script src="{{ asset('') }}backend/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
		<script src="{{ asset('') }}backend/assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="{{ asset('') }}backend/assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="{{ asset('') }}backend/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="{{ asset('') }}backend/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
		<script src="{{ asset('') }}backend/assets/js/table-data.js"></script>

        {{-- unread messages  --}}
        <script>
            function loadUnreadMessages() {
                $.ajax({
                    url: "{{ route('messages.unread') }}",
                    type: "GET",
                    success: function(data) {
                        // Update count
                        $('#unreadCount').text(data.count);

                        // Build messages HTML
                        let html = '';
                        data.messages.forEach(function(msg) {
                            html += `
                                <a class="dropdown-item d-flex" href="/admin/messages/${msg.id}">
                                    <span class="avatar avatar-md brround me-3 align-self-center cover-image" style="background-image: url('${msg.user_avatar}')"></span>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1">${msg.user_name}</h5>
                                            <small class="text-muted ms-auto text-end">${msg.created_at}</small>
                                        </div>
                                        <span class="fs-12 text-muted">${msg.preview}</span>
                                    </div>
                                </a>`;
                        });
                        $('#messageList').html(html);
                    },
                    error: function(err){
                        console.error('Error fetching messages', err);
                    }
                });
            }

            // Load every 5 seconds
            setInterval(loadUnreadMessages, 5000);

            // Initial load
            $(document).ready(function() {
                loadUnreadMessages();
            });
        </script>

        {{-- unread message counter  --}}
        <script>
            function loadMessageCount(){
                $.ajax({
                    url: "{{ route('messages.unreadCount') }}",
                    type: "GET",
                    success: function(data){
                        $('#messageCount').text(data.count);
                    }
                });
            }

            $(document).ready(function(){

                loadMessageCount();

                // live update every 5 seconds
                setInterval(function(){
                    loadMessageCount();
                },5000);

            });
        </script>

        {{-- Summernote initialization --}}
        <script>
            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 200
                });
            });
        </script>

        {{-- Visitor Chart - Using Chart.js --}}
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const chartContainer = document.querySelector("#visitorChart");
                const canvas = document.querySelector("#visitorChartCanvas");
                
                console.log('Chart.js initialization started');

                if (!canvas) {
                    console.error('Canvas element not found');
                    return;
                }

                // Get data from PHP
                const labels = @json($chartData['labels'] ?? []);
                const values = @json($chartData['values'] ?? []);

                console.log('Chart Data:', { labels, values });
                console.log('Non-zero values:', values.filter(v => v > 0).length);

                // Check if Chart.js is available
                if (typeof Chart === 'undefined') {
                    console.error('Chart.js library not loaded');
                    chartContainer.innerHTML = '<p class="text-center text-danger p-4">Chart.js library failed to load.</p>';
                    return;
                }

                // Check if data is available
                if (!labels || !values || labels.length === 0) {
                    console.warn('Chart data is empty');
                    chartContainer.innerHTML = '<p class="text-center text-muted p-4">No visitor data available yet. Visit frontend pages to generate data.</p>';
                    return;
                }

                const ctx = canvas.getContext('2d');

                try {
                    const chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Visitors',
                                data: values,
                                borderColor: '#0d6efd',
                                backgroundColor: 'rgba(13, 110, 253, 0.1)',
                                borderWidth: 2,
                                fill: true,
                                tension: 0.4,
                                pointRadius: 4,
                                pointBackgroundColor: '#0d6efd',
                                pointBorderColor: '#fff',
                                pointBorderWidth: 2,
                                pointHoverRadius: 6
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: true,
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'top'
                                },
                                title: {
                                    display: false
                                }
                            },
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Number of Visitors'
                                    }
                                },
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Date'
                                    }
                                }
                            }
                        }
                    });

                    console.log('Chart.js chart created and rendered successfully!');
                } catch (error) {
                    console.error('Error creating chart:', error);
                    chartContainer.innerHTML = '<p class="text-center text-danger p-4">Error loading chart: ' + error.message + '</p>';
                }
            });
        </script>
    </body>

</html>
