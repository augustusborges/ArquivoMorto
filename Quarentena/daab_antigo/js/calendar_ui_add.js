var $calendar =  $('#clndVisaoAgendaAberta').fullCalendar({
                locale: 'pt-br',
                editable: true,
                navLinks: false, // can click day/week names to navigate views
                eventLimit: true, // allow "more" link when too many events
                
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,' //month,agendaWeek,agendaDay,listWeek
                },

                loading: function(bool) {
                    $('#loading').toggle(bool);
                },

                events: {
                    url: 'fullcalendar/demos/php/get-events.php',
                    error: function() {
                        $('#script-warning').show();
                    }
                },
                
                dayRender: function (date, cell) {
                    //var today = new Date('2018-02-25T00:00:00');
                    var dia = $.fullCalendar.moment('2018-02-25');
                    if (date === dia) {
                        cell.css("background-color", "red");
                    }
                }
            });

  