
from sys import displayhook
import pandas as pd

# URL das planilhas
url = "https://docs.google.com/spreadsheets/d/1stk0uMKnmDI2GHlrjhxD5GqkRSiPPE4d/edit?usp=drive_link"

# le
tabela = pd.read_excel(url)

displayhook(tabela)

