<head>
    <title>{$l_panel} - {$l_config} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="center">
                <h2>{$l_config}</h2>
                <div class="form-group">
                    <form method="POST" action="{$link}/panel/form/configuration" enctype="multipart/form-data">
                        <div class="form-floating">
                            <input type="text" name="wsname" id="wsname" class="form-control" value="{$title}" required/><br>
                            <label>{$l_name} :</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="wsdescr" id="wsdescr" class="form-control" value="{$descr}"/><br>
                            <label>{$l_descr} :</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="wslink" id="wslink" class="form-control" value="{$link}" required/><br>
                            <label>{$l_link} :</label>
                        </div>
                        <div class="form-floating">
                            <select name="wslang" id="wslang" class="form-select" required>
                            {foreach $cfglang as $cl}
                                <option value="{$cl.id}">{$cl.name} ({$cl.id})</option>
                            {/foreach}
                            </select>
                            <label>{$l_lang} :</label><br>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="wstheme" id="wstheme" class="form-control" value="{$theme}" required/><br>
                            <label>{$l_theme} :</label>
                        </div>
                        <input type="submit" class="btn btn-danger btn-lg" value="{$l_edit}" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>