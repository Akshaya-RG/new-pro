<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <style>
.inv {
    display: none;
}
    </style>
    <body>
        <select id="t_ins">
            <option value="">Select...</option>
            <option value="school">school</option>
            <option value="clg">college</option>
            <option value="general">general</option>
        </select>

        <div id="school" class="inv"><?php echo "hello";?></div>
        <div id="clg" class="inv">Content 2</div>
        <div id="general" class="inv">Content 3</div>

        <script>
            document
                .getElementById('t_ins')
                .addEventListener('change', function () {
                    'use strict';
                    var vis = document.querySelector('.vis'),   
                     t_ins = document.getElementById(this.value);
                    if (vis !== null) {
                        vis.className = 'inv';
                    }
                    if (t_ins !== null ) {
                        t_ins.className = 'vis';
                    }
            });
        </script>
    </body>
</html>