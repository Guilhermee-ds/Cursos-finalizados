from datetime import  date , time
import datetime

def trabalhando_com_data():
     data_atual = date.today()
     print(data_atual.strftime('%d/%m/%Y'))




def trabalhando_com_time():
    Horario = time(hour=16 , minute=17 , second=10)
    print(Horario)


if __name__ == '__main__':
    trabalhando_com_time()
    trabalhando_com_data()


