@echo off
cls
msg * Entrando...
msg * Usuario novo!
set/p login='Login: '
if %login%== Helionay goto pass
if %login%== error goto exit

:exit
msg * ERROR, baybay!
exit

:pass
cls
msg * Pensou que ia ser facil?
msg * A senha e bem dificil!
set/p senha='Senha: '
if %senha%== asduaiyd8718231jhbds8u9231928312318623t121n23128391823172 goto home
if %senha%== error goto exit

:home
cls
msg * Parabens!
msg * Voce entrou no arquivo e viu a senha~
msg * Code: [ctf: $function_hacked]
exit
