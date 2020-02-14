module.exports = ({ addUtilities, theme, e, variants }) => {
  const spaceX = Object.fromEntries(
    Object.entries(theme(`spacing`)).map(([k, v]) => [
      `.${e(`space-x-${k}`)} > * + *`,
      { marginLeft: v },
    ])
  )
  const spaceY = Object.fromEntries(
    Object.entries(theme(`spacing`)).map(([k, v]) => [
      `.${e(`space-y-${k}`)} > * + *`,
      { marginTop: v },
    ])
  )
  addUtilities(
    {
      ...spaceX,
      ...spaceY,
    },
    variants(`space`)
  )
}
