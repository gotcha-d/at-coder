import * as fs from "fs"

const COIN500: number = 500
const COIN100: number = 100
const COIN50: number = 50

function main(inputLines: string[]) {
  const a = Number(inputLines[0])
  const b = Number(inputLines[1])
  const c = Number(inputLines[2])
  const x = Number(inputLines[3])

  let count = 0
  for (let i = 0; i <= a; i++) {
    for (let j = 0; j <= b; j++) {
      for (let k = 0; k <= c; k++) {
        const total = (COIN500 * i) + (COIN100 * j) + (COIN50 * k)
        if (total == x) {
          count++
        }
      }
    }
  }
  
  console.log(count)
}

const inputLines = fs.readFileSync("/dev/stdin", "utf8").split(/\n/)
main(inputLines)
