import * as fs from 'fs'

function allEven(target: number[]): boolean {
  // every はコレクションの全ての要素が条件を満たしているか、真偽値を返す
  return target.every((item) => item % 2 == 0 )
}

function main(inputs: string): void {
  const lines = inputs.split(/\n/)
  let candidates = lines[1].split(/\s/).map(element => parseInt(element))

  let count = 0
  while (allEven(candidates)) {
    count++
    const divided = candidates.map(item => item / 2 )
    candidates = divided
  }

  console.log(count)
}

const inputs: string = fs.readFileSync('/dev/stdin', 'utf8')
main(inputs)