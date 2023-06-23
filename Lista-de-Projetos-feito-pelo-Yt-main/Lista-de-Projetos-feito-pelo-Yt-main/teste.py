from PySimpleGUI import PySimpleGUI as sg #Importar a biblioteca

#Layout
sg.theme('Reddit') #escolher o tema

Layout =[
    [sg.Text('Usuário') , sg.Input(key='usuario')],
    [sg.Text('Senha') , sg.Input (key='senha', password_char='*')],
    [sg.Checkbox('Salvar o login ?')],
    [sg.Button('Entrar')]
]

#Janela
Janela = sg.Window('Tela de Login' , Layout)

#Ler eventos
while True:
    eventos , valores = Janela.read() #declara a variavel e abre a tela 
    if eventos == sg.WINDOW_CLOSED:
        break #ele para o loop
    if eventos == 'Entrar':
        if valores['usuario'] == ' Guilherme' and valores['senha']=='12345':
            print('Bem vindo ao aplicativo')
