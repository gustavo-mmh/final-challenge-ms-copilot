# Programa para verificar se um número é par ou ímpar

# Função para verificar paridade
def verificar_paridade(numero):
    if numero % 2 == 0:
        return "par"
    else:
        return "ímpar"

# Solicitar um número ao usuário
numero = int(input("Digite um número: "))

# Verificar a paridade e imprimir o resultado
resultado = verificar_paridade(numero)
print(f"O número {numero} é {resultado}.")
