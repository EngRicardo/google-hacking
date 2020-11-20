        function pastebin(indice){
            url = 'https://www.google.com.br/search?q=';

            switch (indice) {
            case 1:
                url += '+"robots.txt" "disallow:" filetype:txt';
                break;
            case 2:
                url += '+intitle:index of ws_ftp.ini';
                break;
            case 3:
                url += '+intitle:"index of" passwd passwd.bak';
                break;
            case 4:
                url += '+inurl:_vti_pvt "service.pwd"';
                break;
            case 5:
                url += '+inurl:"phphotoalbum/upload"';
                break;
            case 6:
                for (var i = 5800; i < 5807; i++) {
                    url = 'https://www.google.com.br/search?q=+"vnc desktop" inurl:'+i;
                    window.open(url);
                }
                break;
            case 7:
                url += '+intext"UAA(MSB)" Lexmark -ext:pdf';
                break;
            case 8:
                url += '+inurl:"port_255" -htm';
                break;
            case 9:
                url += '+intitle:phpMyAdmin "Welcome to phpMyAdmin ***" "running on * as root@*"';
                break;
            }
            window.open(url);

        }

        function hackersec(indice){
            url = 'https://www.google.com.br/search?q=';

            switch (indice) {
            case 1:
                url += '+"password dump" +@gmail.com site:pastebin.com';
                break;
            case 2:
                url += '+inurl:/phpMyAdmin/index.php db=';
                break;
            case 3:
                url += '+"CPF + nome + RG + Conta Bancária" site=gov.br';
                break;
            case 4:
                url += '+intext:chat.whatsapp.com and intext:São Paulo and intext:futebol';
                break;
            case 5:
                url += '+inurl:"ViewerFrame?Mode=" || intitle:"NetworkCamera"';
                break;
            case 6:
                url += '+inurl:"ViewerFrame?Mode=" || intext:"Brightness" || "Resolution"';
                break;
            case 7:
                url += '+inurl:"ViewerFrame?Mode=Refresh" || " Image Size" || intitle:"Network Camera"';
                break;
            case 8:
                url += '+inurl:"/control/userimage.html" -blog -hack -hacker -crack';
                break;
            case 9:
                url += '+inurl:"/control/userimage.html" -blog -hack -hacker -crack ext:html';
                break;
            }
            window.open(url);

        }

        function confidencial(indice){
            url = 'https://www.google.com.br/search?q=';

            switch (indice) {
            case 1:
                url += '+site:com.br || ext:xls "usuarios"';
                break;
            case 2:
                url += '+site:com.br || ext:xls "intranet" -"Pregão"';
                break;
            case 3:
                url += '+site:"com.*" || ext:xls ("password"|"user")';
                break;
            case 4:
                url += '+site:com.br ext:xls filetype:"xls | xlsx | doc | docx | ppt | pptx | pdf"';
                break;
            case 5:
                url += '+site:.com "FOUO" | "NOFORN" | "Confidential" | "SECRETO" | "CONFIDENCIAL"';
                break;
            case 6:
                url += '+site:com.* site:br "username|password|senha" ext:xls';
                break;
            case 7:
                url += '+inurl:admin filetype:asp';
                break;
            case 8:
                url += '+inurl:userlist';
                break;
            case 9:
                url += '+intext:jdbc:oracle filetype:java';
                break;
            case 10:
                url += '+inurl:"trello.com" and intext:"username" and intext:"password"';
                break;
            }

            window.open(url);

        }