<script>
    /*
     * skd_tugas1 v0.4
     * 
     * Jufans Anurwan I.
     * twitter: @jufanz
     * fork me at http://github.com/jufans
     * 
     * copyright(c)2013
     * under MIT license
     * free to use for all purpose but
     * use at your own risk :p
     * 
     * M3111086 - Sebelas Maret University 
     */
function reveal(){
    alert(document.getElementById('psp').value);
}
    window.onload=function() {
        var aaa=document.getElementById('psw');
        var bbb=document.getElementById('psp');
        var isian="****";
        aaa.value=isian;
        aaa.onkeyup=function(){
            var e = window.event;
            if(e.keyCode!==16){ // If the pressed key is anything other than SHIFT
                c = String.fromCharCode(e.keyCode);
                if(e.shiftKey){ // If the SHIFT key is down, return the ASCII code for the capital letter
                    bbb.value+=c;
                }else{ // If the SHIFT key is not down, convert to the ASCII code for the lowecase letter
                    c = c.toLowerCase(c);
                    bbb.value+=c;
                }
            }
            aaa.value=isian;
        };
    }
</script>
<input type="text" name="psw" id="psw"/><br />
<input type="hidden" name="psp" id="psp"/><br />
<button type="submit" onclick="reveal();">OK</button>
