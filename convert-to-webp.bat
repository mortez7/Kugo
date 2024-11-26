@echo off
setlocal enabledelayedexpansion

:: Указываем путь к папке с изображениями
set "input_dir=img"
set "output_ext=.webp"

:: Проходим по всем файлам с расширением .jpg, .jpeg и .png в папке
for %%f in (%input_dir%\*.jpg %input_dir%\*.jpeg %input_dir%\*.png) do (
    set "input_file=%%f"
    set "output_file=!input_file:.jpg=%output_ext%!"
    set "output_file=!output_file:.jpeg=%output_ext%!"
    set "output_file=!output_file:.png=%output_ext%!"

    :: Конвертируем изображение с качеством 100
    cwebp -q 100 "!input_file!" -o "!output_file!"
)

echo Конвертация завершена!
pause
