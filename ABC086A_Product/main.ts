import * as fs from 'fs'

function main(input: string): void {
  const numStrings: string[] = input.split(/\s/)
  const a = Number(numStrings[0])
  const b = Number(numStrings[1])

  const result = (a * b % 2 == 0) ? "Even" : "Odd"
  console.log(result)
}

const input = fs.readFileSync("/dev/stdin", "utf8")
main(input)