# importar o App, Builder (GUI)
# Criar o  nosso aplicativo
# criar a funçao build


from kivy.app import App
from kivy.lang import Builder
import requests
GUI = Builder.load_file("tela.kv")
class moneystats(App):
    def build(self):
        return GUI

    def on_start(self):
        self.root.ids["moeda1"].text = f"Dolar R${self.pegar_cotacao('USD')}"
        self.root.ids["moeda2"].text = f"Euro R${self.pegar_cotacao('EUR')}"
        self.root.ids["moeda3"].text = f"Biticoin {self.pegar_cotacao('BTC')}"
        self.root.ids["moeda4"].text = f"Ethereun {self.pegar_cotacao('ETH')}"

    def pegar_cotacao(self, moeda):
        link = "http://www.7timer.info/bin/api.pl?lon=113.17&lat=23.09&product=astro&output=json"
        requisicao = requests.get(link)
        dic_requisicao = requisicao.json()
        cotacao = dic_requisicao[""]["bid"]
        print("aqui",cotacao)
        return cotacao