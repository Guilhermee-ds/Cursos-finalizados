# Passo 1 : entrar no sistema da empresaa (no nosso caso vai ser o link do driver)


import pyautogui
import pyperclip
import time


pyautogui.PAUSE = 1
pyautogui.hotkey("ctrl", "t")
pyperclip.copy("https://drive.google.com/drive/folders/149xknr9JvrlEnhNWO49zPcw0PW5icxga?usp=sharing")
pyautogui.hotkey("ctrl", "v")
pyautogui.press("enter")

# # # demora alguns segundos
time.sleep(5)

#  Passo 2 : Navegar no sistema e encontrar a base de dados (entrar na pasta exportar )
pyautogui.click(x=428, y=300, )
pyautogui.click(clicks=2)

#  Passo 3 : exportar/ fazer donwload da base de dados
pyautogui.click(x=384, y=432)  # clicar no arquivo
pyautogui.click(x=1722, y=192)  # clicar nos 3 pontinho
pyautogui.click(x=1504, y=560)  # clicar no fazer download
time.sleep(5)  # esperar o download se concluir
#Passo 4 : importar a base de dados para python

tabela = pd.read_excel(r"D:\Cursos\#Programação\Aula 1/Vendas - Dez.xlsx")
print(tabela)


# passo 5 : calcular os indicadores
#https://drive.google.com/drive/folders/149xknr9JvrlEnhNWO49zPcw0PW5icxga?usp=sharing
# faturamento -soma da coluna valor final
faturamento = tabela["Valor Final"].sum()

# quantidade - soma da venda dos produtos
quantidade = tabela["Quantidade"].sum()
print(faturamento)
print(quantidade)

#  Vamos agora enviar um e-mail pelo gmail

# passo 6 : enviar um email para diretoria com relatorio

import pyautogui
import pyperclip

pyautogui.hotkey("ctrl", "t")
pyperclip.copy("https://mail.google.com/mail/u/0/#inbox")
pyautogui.hotkey("ctrl", "v")
pyautogui.press("enter")
time.sleep(4)

# clicar no escrever para mandar o relatorio
pyautogui.click(x=74, y=202)
time.sleep(10)
# escrever o destinatario
pyautogui.write("xfakeclash@gmail.com")
pyautogui.press("tab")
pyautogui.press("tab")
# passar para o asunto
pyperclip.copy("Relatório de Vendas")
pyautogui.hotkey("ctrl", "v")
pyautogui.press("tab")
# escrever o texto
texto = f"""
    prezados companheiro , bom dia
    o  faturamento de ontem foi de :R${faturamento:,.2f}
    e a quantidade vendida foi de : {quantidade:,}

    abs
    Guilherme"""
pyperclip.copy(texto)
pyautogui.hotkey("ctrl", "v")

# enviar o email
pyautogui.hotkey("ctrl", "enter")
