import * as fs from 'fs'

function allEven(target: number[]): boolean {
  const evens = target.filter(value => {
    return value % 2 == 0
  })
  return evens.length > 0
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