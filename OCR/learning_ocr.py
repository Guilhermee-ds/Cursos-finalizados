# PROJETO OCR POREM COM O FORMATO DE PYTHON

# -*- coding: utf-8 -*-
"""learning OCR

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1-yUfTrOawU0faos4zd4RTbfPBmmAP8CQ
"""

#Baixar as lib e linguagens que vamos usar no curso:
!pip install opencv-python==4.6.0
!sudo apt install tesseract-ocr
!pip install pytesseract==0.3.9

#importar as bibliotecas
import pytesseract
import numpy as np
import cv2
from google.colab.patches import cv2_imshow

#Clonar o repositório
!git clone https://github.com/sthemonica/text-recognize

#importar as bibliotecas
import pytesseract
import numpy as np
import cv2 # OpenCV
from google.colab.patches import cv2_imshow # para mostrar as imagens no Google Colab

#ver a Versão do pytesseract
pytesseract.__version__

#extrair a imagem
img = cv2.imread('/content/text-recognize/Imagens/Aula1-ocr.png')
cv2_imshow(img)

#extrair o texto
texto = pytesseract.image_to_string(img)
print(texto)

img = cv2.imread('/content/text-recognize/Imagens/Aula1-ocr.png')
cv2_imshow(img)

rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
cv2_imshow(rgb)

#mudar o fundo para marom
gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
cv2_imshow(gray)

#mudar a imagem para cinza e tirar o texto da imagem
texto = pytesseract.image_to_string(gray)
print(texto)

"""***Aula 2***"""

#extrair a imagem
img = cv2.imread('/content/text-recognize/Imagens/Aula2-undersampling.png')
rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
cv2_imshow(rgb)

# mudar a imagem para cinza (está com algums erros de português)
texto = pytesseract.image_to_string(rgb)
print(texto)

#ver as liguagens instaladas
!tesseract --list-langs

#instalar a lingua portuguesa
!apt-get install tesseract-ocr-por

# imprimir o texto importando a lingua portuguesa(agora sem erros de portugues)
texto = pytesseract.image_to_string(rgb, lang ='por')
print(texto)

"""**Desafio**

"""

#criar a pasta
!mkdir tessdata

#clonar a linguagem do github
!wget -O ./tessdata/por.traineddata https://github.com/tesseract-ocr/tessdata/blob/main/por.traineddata?raw=true
!wget -O ./tessdata/eng.traineddata https://github.com/tesseract-ocr/tessdata/blob/main/eng.traineddata?raw=true

#configurar o tessdata
config_tesseract = '--tessdata-dir tessdata'
texto = pytesseract.image_to_string(rgb, lang='por', config=config_tesseract)
print(texto)

"""**PSM**"""

#modos do psm
!tesseract --help-psm

#extrair a imagem
img = cv2.imread('/content/text-recognize/Imagens/Aula2-trecho-livro.png')
rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
cv2_imshow(rgb)

#ler a parte do texto
config_tesseract = '--tessdata-dir tessdata'
texto = pytesseract.image_to_string(rgb, lang='por', config=config_tesseract)
print(texto)

#usando outro tipo do psm = 6
config_tesseract = '--tessdata-dir tessdata --psm 6'
texto = pytesseract.image_to_string(rgb, lang='por', config=config_tesseract)
print(texto)

#extrair a imagem saida
img = cv2.imread('/content/text-recognize/Imagens/Aula2-Saida.png')
rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
cv2_imshow(rgb)

#usando outro tipo do psm = 8
config_tesseract = '--tessdata-dir tessdata --psm 8'
texto = pytesseract.image_to_string(rgb, lang='por', config=config_tesseract)
print(texto)

"""Todos os tipos do **PSM**


---


**PSM 0 **- Apenas orientação e detecção de script (OSD): Esse modo não executa OCR, ele apenas nos dá informações sobre a imagem: como a imagem está disposta em graus (se está rotacionada ou não), a confiança da escrita (sinais gráficos/sistemas de escrita) como por exemplo se é latim, han, cirílico, etc.


---


**PSM 1 - **Segmentação automática de página com OSD: Esse modo não executa OCR e não retorna um resultado do OSD, mas ele ajusta o OSD de forma automática.


---


**PSM 2 -** Segmentação de página automática, mas sem OSD ou OCR: Faz apenas a segmentação da página, sem retirar informações de OSD ou textos com OCR.


---


**PSM 3 -** Segmentação de página totalmente automática, mas sem OSD: Modo padrão do Tesseract OCR, tenta encaixar o PSM correto no texto que está na imagem, mas sem retorno de OSD.


---


**PSM 4 -** Assuma uma única coluna de texto de tamanhos variáveis: O OCR nesse caso lê a imagem como uma coluna, linha a linha, mesmo com textos de diferentes tamanhos. Isso pode ser aplicado por exemplo em dados de planilhas, tabelas ou recibos.


---


**PSM 5 - **Assuma um único bloco uniforme de texto alinhado verticalmente: Nesse caso de PSM ao invés de termos a leitura da imagem na horizontal, temos ela na vertical, com as linhas em modo vertical, como se a imagem, a mesma que podemos usar no PSM 4, estivesse rotacionada 90º. PSM 5 pode ser aplicado em dados de planilhas, tabelas, recibos, entre outros que tenham blocos de textos em linhas verticais.


---


**PSM 6 -** Assuma um único bloco uniforme de texto: Esse modo de segmentação pode ser utilizado para textos como páginas de livros, por exemplo, que tem uma única fonte. Nesses casos, quando o texto é uma única fonte sem qualquer variação, temos um texto uniforme e simples para o Tesseract compreender.


---


**PSM 7 -** Trate a imagem como uma única linha de texto: Esse modo é utilizado quando trabalhamos com uma única linha de texto uniforme, como por exemplo placas de carro.


---


**PSM 8 - **Trate a imagem como uma única palavra: Esse modo é utilizado apenas quando temos uma única palavra, um exemplo de caso é em placas como placas de trânsito “PARE” ou placas de alerta com “SAÍDA”.


---


**PSM 9 -**Trate a imagem como uma única palavra em um círculo: O PSM 9 pode ser utilizado em dois casos específicos:

1 - quando o texto está realmente dentro de um círculo;

2 - quando o texto está em torno de um círculo invisível, ou seja, o texto está em formato de arco.

**PSM 10 - **Trate a imagem como um único caractere: Esse modo deve ser utilizado quando o tratamento da imagem já foi feito, a extração de cada caractere individual da imagem já foi realizada e o PSM é utilizado para reconhecimento do caractere.


---


**PSM 11 -** Encontre o máximo de texto possível em nenhuma ordem específica: A detecção de texto esparso pode ser útil quando há muito texto em uma imagem que você precisa extrair. Ao usar este modo, você normalmente não se importa com a ordem ou agrupamento do texto, mas sim com o próprio texto.


---


**PSM 12 -** Texto esparso com orientação e detecção de script: O PSM 12 é semelhante ao PSM 0 (não executa OCR, apenas nos dá informações sobre a imagem), mas é utilizado em texto esparso como o PSM 11.


---


**PSM 13 -** Trate a imagem como uma única linha de texto, ignorando hacks específicos do Tesseract: Quando o resultado final de uma imagem com uma única linha de texto é nenhum texto detectado (seja por temos uma fonte que o Tesseract não reconhece, ou o texto é recortado ou até mesmo estilizado de alguma forma) é possível testar o PSM 13 que trata o texto como uma única linha bruta de texto.


---

**Pillow**
"""

#importar as lib
from PIL import Image
import matplotlib.pyplot as plt

#abrir uma imagem
img = Image.open('/content/text-recognize/Imagens/Aula2-livro.png')
plt.imshow(img);

#conseguir informações das imagens
print(pytesseract.image_to_osd(img))

"""**Aula 3**"""

#extrair a imagem
img = cv2.imread('/content/text-recognize/Imagens/Aula3-testando.png')
rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
cv2_imshow(rgb)

#importanto a LIB output
from pytesseract import Output

#sabendo os dados da imagem
config_tesseract = '--tessdata-dir tessdata'
resultado = pytesseract.image_to_data(rgb,config=config_tesseract, lang='por', output_type= Output.DICT)
resultado

#fazendo minimo de confiança
min_conf = 40 #@param{type: 'slider', min: 0, max:100}

#Caixa delimitadora

def caixa_texto(resultado,img, cor = (255,100, 0)):
  x = resultado['left'] [i]
  y = resultado['top'] [i]
  w  = resultado['width'] [i]
  h = resultado['height'] [i]

  cv2.rectangle(img, (x, y), (x+w, y+h), cor, 2)

  return x, y, img

len (resultado['text'])

#fazendo a caixa delimitadora em cada célula
img_copia = rgb.copy()

for i in range(len(resultado['text'])):
  confianca = int(resultado['conf'][i])
  if confianca > min_conf:
    x, y, img = caixa_texto(resultado, img_copia)
    cv2_imshow(img_copia)

#ESCREVENDO O QUE ESTA ESCRITO NA CAIXA SOBRE ELA
img_copia = rgb.copy()

for i in range(len(resultado['text'])):
  confianca = int(resultado['conf'][i])
  if confianca > min_conf:
    x, y, img = caixa_texto(resultado, img_copia)

    texto = resultado['text'] [i]
    cv2.putText(img_copia, texto, (x, y - 10), cv2.FONT_HERSHEY_SIMPLEX, 0.8 , (0,100,255))

    cv2_imshow(img_copia)

"""**FONTES**"""

#extrair a imagem
img = cv2.imread('/content/text-recognize/Imagens/Aula1-ocr.png')
rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
cv2_imshow(rgb)

#sabendo os dados da imagem
config_tesseract = '--tessdata-dir tessdata'
resultado = pytesseract.image_to_data(rgb,config=config_tesseract, lang='por', output_type= Output.DICT)
resultado

#Importando a fonte nova
from PIL import ImageFont, ImageDraw, Image
fonte = '/content/text-recognize/Imagens/calibri.ttf'

"""**Função para fontes**"""

def escreve_texto(texto, x, y, img, fonte, tamanho_texto=32):
  fonte = ImageFont.truetype(fonte, tamanho_texto)
  img_pil = Image.fromarray(img)
  draw = ImageDraw.Draw(img_pil)
  draw.text((x, y - tamanho_texto), texto, font = fonte)
  img = np.array(img_pil)
  return img

#rodar com a nova fonte e escrever sobre a caixa o texto dentro dela
img_copia = rgb.copy()

for i in range(len(resultado['text'])):
  confianca = int(resultado['conf'][i])
  if confianca > min_conf:
    x, y, img = caixa_texto(resultado, img_copia)

    texto = resultado['text'][i]
    #cv2.putText(img_copia, texto, (x, y - 10), cv2.FONT_HERSHEY_SIMPLEX, 0.8 , (0,100,255))
    img_copia = escreve_texto(texto, x, y, img_copia, fonte)

    cv2_imshow(img_copia)

"""**Aula 4**"""

#importar o Regex
import re

#extrair a imagem
img = cv2.imread('/content/text-recognize/Imagens/Aula4-tabela_teste.png')
rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
cv2_imshow(rgb)

#sabendo os dados da imagem
config_tesseract = '--tessdata-dir tessdata'
resultado = pytesseract.image_to_data(rgb, config=config_tesseract, lang="por", output_type= Output.DICT)
resultado

#padronizar a data
padrao_data = '^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[012])/(19|20)\d\d$'

#marcando os dados e escrevendo as datas

img_copia = rgb.copy()
for i in range(0, len(resultado['text'])):
  confianca = int(resultado['conf'][i])
  if confianca > min_conf:
    texto = resultado['text'][i]

    if re.match(padrao_data, texto):
      x, y, img = caixa_texto(resultado, img_copia)
      img_copia = escreve_texto(texto, x, y, img_copia, fonte, 12)
    else:
      x, y, img_copia = caixa_texto(resultado, img_copia)

cv2_imshow(img_copia)

"""**Destaque de Informações**"""

#marcar em vermelho a parte de datas
datas = []

img_copia = rgb.copy()
for i in range(0, len(resultado['text'])):
  confianca = int(resultado['conf'][i])
  if confianca > min_conf:
    texto = resultado['text'][i]

    if re.match(padrao_data, texto):
      x, y, img = caixa_texto(resultado, img_copia, (0,0,255))
      img_copia = escreve_texto(texto, x, y, img_copia, fonte, 12)
      datas.append(texto)
    else:
      x, y, img_copia = caixa_texto(resultado, img_copia)

cv2_imshow(img_copia)

datas

"""**Cenários Naturais**"""

#extrair a imagem
img = cv2.imread('/content/text-recognize/Imagens/Aula4-caneca2.jpg')
rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
cv2_imshow(rgb)

#configurar o psm

config_tesseract = '--tessdata-dir tessdata --psm 6'

#fazendo minimo de confiança
min_conf = 40 #@param{type: 'slider', min: 0, max:100}

#resultado
resultado = pytesseract.image_to_data(rgb, config=config_tesseract, lang="por", output_type= Output.DICT)
resultado

#rodar com a nova fonte e escrever sobre a caixa o texto dentro dela
img_copia = rgb.copy()

for i in range(0, len(resultado['text'])):
  confianca = int(resultado['conf'][i])

  if confianca > min_conf:
    x, y, img = caixa_texto(resultado, img_copia)

    texto = resultado['text'][i]
    img_copia = escreve_texto(texto, x, y, img_copia, fonte)

cv2_imshow(img_copia)

"""**Falsos Positivos**"""

resultado['conf']

resultado['text']

#tratando pos processamento

img_copia = rgb.copy()

for i in range(0, len(resultado['text'])):
  confianca = int(resultado['conf'][i])

  if confianca > min_conf:

    texto = resultado['text'][i]
    if not texto.isspace() and len(texto) > 1:

      x, y, img = caixa_texto(resultado, img_copia)
      img_copia = escreve_texto(texto, x, y, img_copia, fonte)

cv2_imshow(img_copia)

"""**Atividade : cenários naturais**"""

img = cv2.imread('/content/text-recognize/Atividades/Aula4_placa.jpg')
rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
cv2_imshow(rgb)

config_tesseract = '--tessdata-dir tessdata --psm 6'
min_conf = 40
resultado = pytesseract.image_to_data(rgb, lang="por", output_type=Output.DICT, config=config_tesseract)

img_copia = rgb.copy()
for i in range(0, len(resultado['text'])):
  confianca = int(resultado['conf'][i])
  if confianca > min_conf:
    x, y, img = caixa_texto(resultado, img_copia)
    texto = resultado['text'][i]
    #cv2.putText(img_copia, texto, (x, y - 10), cv2.FONT_HERSHEY_SIMPLEX, 1.1, (0,0,255))
    img_copia = escreve_texto(texto, x, y, img_copia, fonte)
cv2_imshow(img_copia)